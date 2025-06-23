<?php

namespace Biboletin\Response;

use Biboletin\Request\Stream;
use SimpleXMLElement;

class XmlResponse extends BaseResponse
{
    public  function __construct($data, int $statusCode = 200, array $headers = [])
    {
        $body = new Stream(fopen('php://temp', 'r+'));
        $xmlData = $this->arrayToXml($data);
        $body->write($xmlData);
        $body->rewind();

        $headers['Content-Type'] = 'application/xml; charset=UTF-8';

        parent::__construct($statusCode, $headers, $body);
    }

    protected function arrayToXml(array $data, SimpleXMLElement $xml = null): string
    {
        if ($xml === null) {
            $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><response/>');
        }

        foreach ($data as $key => $value) {
            $key = is_numeric($key) ? "item" . $key : $key;

            if (is_array($value)) {
                $this->arrayToXml($value, $xml->addChild($key));
            } else {
                $xml->addChild($key, htmlspecialchars((string) $value));
            }
        }

        return $xml->asXML();
    }
}