<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Advantage;
use App\models\Condition;
use App\models\Tour;
use App\models\Contact;


class SiteController extends Controller
{

    private $advantages;
    private $conditions;
    private $tours;
    private $contacts;

    public function __construct(Advantage $advantages, Condition $conditions, Tour $tours, Contact $contacts)
    {
        $this->advantages = $advantages;
        $this->conditions = $conditions;
        $this->tours = $tours;
        $this->contacts = $contacts;
    }

    public function index()
    {
        $advantages = $this->advantages->get();
        return view('site.index', ['advantages'=>$advantages]);
    }

    public function tour($id)
    {
        $tour = $this->tours->where('id', $id)->first();
        return view('site.tour', ['tour'=>$tour]);
    }

    public function tours()
    {
        $tours = $this->tours->get();
        return view('site.tours', ['tours'=>$tours]);
    }

    public function conditions()
    {
        $conditions = $this->conditions->get();
        return view('site.condition', ['conditions'=>$conditions]);
    }

    public function contacts()
    {
        $contacts = $this->contacts->get();
        return view('site.contacts', ['contacts'=>$contacts]);
    }
}
