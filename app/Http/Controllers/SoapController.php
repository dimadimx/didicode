<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoapController extends Controller
{
    protected $soapLink = 'https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $names = [];
        try {
            $soap = new \SoapClient($this->soapLink);
            // instead of GetByName we can use $soap->QueryByName(['name' => 'a'])
            $xml = new \SimpleXMLElement($soap->GetByName()->GetByNameResult->any);
            if (($SimpleXMLElements = $xml->xpath('*/SQL/Name')) !== false) {
                // reset array to single
                $names = array_map('current', $SimpleXMLElements);
            }
        } catch(\SoapFault $e) {
            abort(404);
        }

        return view('soap.index', ['data' => self::filterArrayByFirstLetter('a', $names)]);
    }

    /**
     * filterArrayByFirstLetter
     *
     * @param string $letter
     * @param array $data
     * @return array
     */
    private static function filterArrayByFirstLetter(string $letter, array $data): array {
        return array_filter($data, function($item) use ($letter) {
            return strtolower(substr($item, 0, 1)) == strtolower($letter);
        });
    }
}
