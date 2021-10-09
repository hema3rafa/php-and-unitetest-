<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/8/2021
 * @project : jumia-exercise
 */


namespace App\controller;


use App\helpers\Controller;
use App\helpers\Request;
use App\libs\PhoneValidator;
use App\repository\CustomerRepository;
use bootstrap\App;
use Exception;

class HomeController extends Controller
{
    /**
     * @throws Exception
     */
    public function index(): int
    {
        $customers = CustomerRepository::getAllData();
        $customers = (new PhoneValidator(App::get('phone_numbers_validators')))
            ->normalize($customers);
        $countries = App::get('countries') ;


        if (sizeof(Request::getRequestParameters()) > 0) {

            $customers = CustomerRepository::filter($customers, $this->requestMapper(Request::getRequestParameters()));
        }

        $selectedState = $_GET['state'] ?? "";
        $selectedCountry = $_GET['country'] ?? "";

        return $this->view('index', compact('customers','countries','selectedState','selectedCountry'));
    }

    /**
     * @param array $requestData
     * @return array
     */
    public function requestMapper(array $requestData): array
    {

        $filterArguments = [];
        if (key_exists("country", $requestData)) {
            $filterArguments ["CountryName"] = $requestData['country'];
        }

        if (key_exists("state", $requestData)) {

            $filterArguments ["ValidationState"] = $requestData['state'] == 'true';

        }
        return $filterArguments;
    }


}
