<?php

class GetController extends BaseController {

    public function contentReturn($dname, $pagepath = '/')
    {
        // $arraystr = array();
        // return Response::json($arraystr);
        return 'your domain name is'.$dname. '. your path is' . $pagepath;
        // return 'your domain name is'.$dname. '. your path is' . Request::path();
    }

}
