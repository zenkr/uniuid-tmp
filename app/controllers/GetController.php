<?php

class GetController extends BaseController {

    public function contentReturn($dname, $pagepath = '/')
    {
    	$conf = yaml_parse_file ('/zsrv/etc/uniuid-tmp/public/yaml/about.yaml');
    	print_r($conf);
        // $arraystr = array();
        // return Response::json($arraystr);
        return 'your domain name is '.$dname. '. your path is ' . $pagepath;
        // return 'your domain name is'.$dname. '. your path is' . Request::path();
    }

}
