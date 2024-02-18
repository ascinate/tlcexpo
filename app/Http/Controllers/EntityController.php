<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entity;

class EntityController extends Controller
{
     //
     public function index()
     {
         $data = Entity::all();
         return view('admin/entities', ['datas' => $data]);
     }

     public function showData($id)
     {
         $data = Entity::find($id);
         return view('admin/editentity',['data' => $data]);
     }

     public function viewData($id)
     {
         $data = Entity::find($id);
         return view('admin/viewentity',['data' => $data]);
     }

     public function insertentity(Request $request)
     {
        $entity = new Entity();

        $email_address = array('email_type' => $request->email_type,
                               'email' => $request->email);

        $accounts = array('service' => $request->service,
                          'account_url' => $request->account_url);

        $telephone = array('type' => $request->type,
                           'number' => $request->number,
                           'ext' => $request->ext,
                           'cc' => $request->cc,
                           'priority' => $request->priority);

        $locations = array('address' => $request->address);

        $subrelation = array('parent' => $request->parent,
                             'relation_description' => $request->relation_description);


        $emails = json_encode($email_address);
        $internet_accounts = json_encode($accounts);
        $phones =  json_encode($telephone);
        $entity_locations = json_encode($locations);
        $sub_account = json_encode($subrelation);

        $entity->legeal_name = $request->legeal_name;
        $entity->entity_type = $request->entity_type;
        $entity->display_listing = $request->display_listing;
        $entity->business_name = $request->business_name;
        $entity->business_type = $request->business_type;
        $entity->dba = $request->dba;
        $entity->salutation = $request->salutation;
        $entity->firstname = $request->firstname;
        $entity->lastname = $request->lastname;
        $entity->nickname = $request->nickname;
        $entity->secondname = $request->secondname;
        $entity->suffix = $request->suffix;
        $entity->gender = $request->gender;
        $entity->birthday = $request->birthday;
        $entity->formal_salutation = $request->formal_salutation;
        $entity->informal_saluation = $request->informal_saluation;
        $entity->position = $request->position;

        $entity->emails = $emails;
        $entity->internetaccounts = $internet_accounts;
        $entity->telephone = $phones;
        $entity->locations = $entity_locations;
        $entity->sub_relationship = $sub_account;

        if($image=$request->logo)
        {
            $destination = 'uploads/';
            $catImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destination, $catImage);
            $entity->logo = $catImage;
        }

        $entity->save();
        return redirect('admin/entities');
     }

     public function updateentity(Request $request)
     {
        $entity = Entity::find($request->id);

        $email_address = array('email_type' => $request->email_type,
                               'email' => $request->email);

        $accounts = array('service' => $request->service,
                          'account_url' => $request->account_url);

        $telephone = array('type' => $request->type,
                           'number' => $request->number,
                           'ext' => $request->ext,
                           'cc' => $request->cc,
                           'priority' => $request->priority);

        $locations = array('address' => $request->address);

        $subrelation = array('parent' => $request->parent,
                             'relation_description' => $request->relation_description);


        $emails = json_encode($email_address);
        $internet_accounts = json_encode($accounts);
        $phones =  json_encode($telephone);
        $entity_locations = json_encode($locations);
        $sub_account = json_encode($subrelation);

        $entity->legeal_name = $request->legeal_name;
        $entity->entity_type = $request->entity_type;
        $entity->display_listing = $request->display_listing;
        $entity->business_name = $request->business_name;
        $entity->business_type = $request->business_type;
        $entity->dba = $request->dba;
        $entity->salutation = $request->salutation;
        $entity->firstname = $request->firstname;
        $entity->lastname = $request->lastname;
        $entity->nickname = $request->nickname;
        $entity->secondname = $request->secondname;
        $entity->suffix = $request->suffix;
        $entity->gender = $request->gender;
        $entity->birthday = $request->birthday;
        $entity->formal_salutation = $request->formal_salutation;
        $entity->informal_saluation = $request->informal_saluation;
        $entity->position = $request->position;

        $entity->emails = $emails;
        $entity->internetaccounts = $internet_accounts;
        $entity->telephone = $phones;
        $entity->locations = $entity_locations;
        $entity->sub_relationship = $sub_account;

        if($image=$request->logo)
        {
            $destination = 'uploads/';
            $catImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destination, $catImage);
            $entity->logo = $catImage;
        }

        $entity->save();
        return redirect('admin/entities');
     }

    public function delete($id)
    {
        $customer = Entity::find($id);
        $customer->delete();
        return redirect('admin/entities');
    }

}
