<?php

class GetController extends BaseController {

    public function contentReturn($dname, $pagepath = '/')
    {
        $conf = yaml_parse_file ('/zsrv/etc/uniuid-tmp/yaml/about.yaml');
        return Response::json($conf);
        return 'your domain name is '.$dname. '. your path is ' . $pagepath;
        // return 'your domain name is'.$dname. '. your path is' . Request::path();
    }

}
