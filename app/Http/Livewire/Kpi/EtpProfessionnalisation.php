<?php

namespace App\Http\Livewire\Kpi;

use Livewire\Component;

use Illuminate\Support\Facades\DB;

class EtpProfessionnalisation extends Component
{
    public $etp;

    public function mount($reference = 2021)
    {
        $contratsPro = DB::select('select * from data_cpro');
        
        foreach ($contratsPro as $contratPro) {
            $this->fonction1($contratPro);
            $this->fonction2($contratPro);
            $this->fonction3($contratPro);
            $this->fonction4($contratPro);
        }
    }

    public function render()
    {
        return view('livewire.kpi.etp-professionnalisation');
    }

    public function fonction1($contratPro)
    {
        if (!empty($contratPro->Date_Rupture)) {
            if ($contratPro->Date_debut_contrat < date('c') && $contratPro->Date_Rupture > date('c')) {
                $this->etp++;
            }
        } else {
            if ($contratPro->Date_debut_contrat < date('c') && $contratPro->Date_fin_contrat > date('c')) {
                $this->etp++;
            }
        }
    }

    public function fonction2($contratPro)
    {
        if (!empty($contratPro->Date_Rupture)) {
            if ($contratPro->Date_debut_contrat == date('c') && $contratPro->Date_Rupture > date('c')) {
                $this->etp += $contratPro->Date_debut_contrat - date('c');
            }
        } else {
            if ($contratPro->Date_debut_contrat == date('c') && $contratPro->Date_fin_contrat > date('c')) {
                $this->etp += $contratPro->Date_debut_contrat - date('c');
            }
        }
    }

    public function fonction3($contratPro)
    {
        if (!empty($contratPro->Date_Rupture)) {
            if ($contratPro->Date_debut_contrat < date('c') && $contratPro->Date_Rupture == date('c')) {
                $this->etp += $contratPro->Date_debut_contrat - date('c');
            }
        } else {
            if ($contratPro->Date_debut_contrat < date('c') && $contratPro->Date_fin_contrat == date('c')) {
                $this->etp += $contratPro->Date_debut_contrat - date('c');
            }
        }
    }

    public function fonction4($contratPro)
    {
        if (!empty($contratPro->Date_Rupture)) {
            if ($contratPro->Date_debut_contrat == date('c') && $contratPro->Date_Rupture == date('c')) {
                $this->etp += $contratPro->Date_debut_contrat - $contratPro->Date_Rupture;
            }
        } else {
            if ($contratPro->Date_debut_contrat == date('c') && $contratPro->Date_fin_contrat == date('c')) {
                $this->etp += $contratPro->Date_debut_contrat - $contratPro->Date_fin_contrat;
            }
        }
    }
}
