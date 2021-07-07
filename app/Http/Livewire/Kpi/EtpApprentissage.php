<?php

namespace App\Http\Livewire\Kpi;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EtpApprentissage extends Component
{
    public $etp;

    public function mount($reference = 2021)
    {
        $contratsApp = DB::select('select * from data_capp');
        
        foreach ($contratsApp as $contratApp) {
            $this->fonction1($contratApp);
            $this->fonction2($contratApp);
            $this->fonction3($contratApp);
            $this->fonction4($contratApp);
        }
    }

    public function render()
    {
        return view('livewire.kpi.etp-apprentissage');
    }

    public function fonction1($contratApp)
    {
        if (!empty($contratApp->Date_Rupture)) {
            if ($contratApp->Date_debut_contrat < date('c') && $contratApp->Date_Rupture > date('c')) {
                $this->etp++;
            }
        } else {
            if ($contratApp->Date_debut_contrat < date('c') && $contratApp->Date_fin_contrat > date('c')) {
                $this->etp++;
            }
        }
    }

    public function fonction2($contratApp)
    {
        if (!empty($contratApp->Date_Rupture)) {
            if ($contratApp->Date_debut_contrat == date('c') && $contratApp->Date_Rupture > date('c')) {
                $this->etp += $contratApp->Date_debut_contrat - date('c');
            }
        } else {
            if ($contratApp->Date_debut_contrat == date('c') && $contratApp->Date_fin_contrat > date('c')) {
                $this->etp += $contratApp->Date_debut_contrat - date('c');
            }
        }
    }

    public function fonction3($contratApp)
    {
        if (!empty($contratApp->Date_Rupture)) {
            if ($contratApp->Date_debut_contrat < date('c') && $contratApp->Date_Rupture == date('c')) {
                $this->etp += $contratApp->Date_debut_contrat - date('c');
            }
        } else {
            if ($contratApp->Date_debut_contrat < date('c') && $contratApp->Date_fin_contrat == date('c')) {
                $this->etp += $contratApp->Date_debut_contrat - date('c');
            }
        }
    }

    public function fonction4($contratApp)
    {
        if (!empty($contratApp->Date_Rupture)) {
            if ($contratApp->Date_debut_contrat == date('c') && $contratApp->Date_Rupture == date('c')) {
                $this->etp += $contratApp->Date_debut_contrat - $contratApp->Date_Rupture;
            }
        } else {
            if ($contratApp->Date_debut_contrat == date('c') && $contratApp->Date_fin_contrat == date('c')) {
                $this->etp += $contratApp->Date_debut_contrat - $contratApp->Date_fin_contrat;
            }
        }
    }
}
