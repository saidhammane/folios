<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\LanguageSkill;
use App\Models\BarSkill;
use App\Models\ChecklistItem;

class FolioController extends Controller
{
    private function profileData(): array
    {
        return [
            'profile' => Profile::query()->first(),
            'languageSkills' => LanguageSkill::query()->orderBy('sort_order')->get(),
            'barSkills' => BarSkill::query()->orderBy('sort_order')->get(),
            'checklistItems' => ChecklistItem::query()->orderBy('sort_order')->get(),
        ];
    }

    public function app(){
        return view('folio.app', $this->profileData());
    }

    public function portfolio(){
        return view('folio.pages.portfolio', $this->profileData());
    }

    public function contact(){
        return view('folio.pages.contact', $this->profileData());
    }

    public function blogDetail(){
        return view('folio.pages.blogdetail', $this->profileData());
    }

    public function history(){
        return view('folio.pages.history', $this->profileData());
    }
    public function mail(){
        return view('folio.pages.mail', $this->profileData());
    }
}
