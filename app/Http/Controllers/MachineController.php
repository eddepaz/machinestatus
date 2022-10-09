<?php

namespace App\Http\Controllers;

use App\Exports\StatusExcel;
use App\Models\Machines;
use App\Models\MachineStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class MachineController extends Controller
{
    public function formMachine()
    {
        // $recordStatus = MachineStatus::orderBy('date_register', 'desc')->first();
        // dd($recordStatus);

        $recordStatus = MachineStatus::select('machines.machine', 'machine_statuses.date_register', 'machine_statuses.status', 'machine_statuses.limitation')
            ->join('machines', 'machine_statuses.id_machine', 'machines.id')
            ->orderBy('machine_statuses.date_register', 'desc')
            ->take(15)
            ->get();

        // dd($recordStatus[0]);

        return view('formmachine.create')->with('recordStatus', $recordStatus);
    }

    public function getStatus(Request $request)
    {


        $recordStatusDB = MachineStatus::orderBy('date_register', 'desc')->take();
        return view('statusMachines2', compact('recordStatusDB'));

        // dd($recordStatusDB);
    }

    public function generateInfo(Request $request)
    {



        $startDate = Carbon::createFromFormat('Y-m-d', $request->init_date)->startOfDay();
        $endDate = Carbon::createFromFormat('Y-m-d', $request->end_date)->endOfDay();


        $recordStatusDB = MachineStatus::select('machines.machine', 'machine_statuses.date_register', 'machine_statuses.status', 'machine_statuses.limitation')
            ->join('machines', 'machine_statuses.id_machine', 'machines.id')
            ->where('machine_statuses.date_register', '>=', $startDate)
            ->where('machine_statuses.date_register', '<=', $endDate)
            ->get();


        // $recordStatusDB = DB::table('machine_statuses')
        //     ->select('machines.machine', DB::raw('SUM(qty_hours) as qty_hours'), 'id_user')
        //     ->join('users', 'over_times.id_user', 'users.id')
        //     ->where('start_hour', '>=', $startDate)
        //     ->where('end_hour', '<=', $endDate)
        //     ->where('over_times.aproved', '=', 1)
        //     ->groupBy('name_last', 'id_user')
        //     ->get();

        // $recordStatusDB = MachineStatus::orderBy('date_register', 'desc')->take($request->registers)->get();

        return Excel::download(new StatusExcel(['recordStatusDB' => $recordStatusDB]), 'ReporteMaquinas.xls');
        dd('generateInfo');
    }

    public function formMachineSubmit(Request $request)
    {

        date_default_timezone_set('America/Guatemala');
        $now = new \DateTime();

        $dataMachines = Machines::get();


        $validated = $request->validate([
            'linde1' => 'required|string|max:255',
            'linde2' => 'required|string|max:255',
            'linde3' => 'required|string|max:255',
            'linde4' => 'required|string|max:255',
            'linde5' => 'required|string|max:255',
            'linde6' => 'required|string|max:255',
            'linde7' => 'required|string|max:255',
            'terex4' => 'required|string|max:255',
            'terex5' => 'required|string|max:255',
            'terex6' => 'required|string|max:255',
            'terex7' => 'required|string|max:255',
            'ts7' => 'required|string|max:255',
            'tfg' => 'required|string|max:255',
            'tfp3' => 'required|string|max:255',
            'tftdb' => 'required|string|max:255',

        ]);


        // Linde 1
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[0]->id;
        if ($request->linde1 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->linde1 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->linde1 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->linde1limitant;

        $machineStatus->save();


        // Linde 2
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[1]->id;
        if ($request->linde2 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->linde2 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->linde2 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->linde2limitant;
        $machineStatus->save();

        // Linde 3
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[2]->id;
        if ($request->linde3 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->linde3 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->linde3 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->linde3limitant;
        $machineStatus->save();

        // Linde 4
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[3]->id;
        if ($request->linde4 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->linde4 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->linde4 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->linde4limitant;
        $machineStatus->save();

        // Linde 5
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[4]->id;
        if ($request->linde5 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->linde5 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->linde5 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->linde5limitant;
        $machineStatus->save();

        // Linde 6
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[5]->id;
        if ($request->linde6 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->linde6 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->linde6 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->linde6limitant;
        $machineStatus->save();

        // Linde 7
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[6]->id;
        if ($request->linde7 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->linde7 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->linde7 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->linde7limitant;
        $machineStatus->save();

        // Terex 4
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[7]->id;
        if ($request->terex4 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->terex4 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->terex4 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->terex4limitant;
        $machineStatus->save();

        // Terex 5
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[8]->id;
        if ($request->terex5 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->terex5 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->terex5 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->terex5limitant;
        $machineStatus->save();

        // Terex 6
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[9]->id;
        if ($request->terex6 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->terex6 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->terex6 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->terex6limitant;
        $machineStatus->save();

        // Terex 7
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[10]->id;
        if ($request->terex7 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->terex7 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->terex7 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->terex7limitant;
        $machineStatus->save();

        // TS7
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[11]->id;
        if ($request->ts7 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->ts7 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->ts7 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->ts7limitant;
        $machineStatus->save();

        // TFG
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[12]->id;
        if ($request->tfg === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->tfg === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->tfg === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->tfglimitant;
        $machineStatus->save();

        // TFP3
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[13]->id;
        if ($request->tfp3 === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->tfp3 === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->tfp3 === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->tfp3limitant;
        $machineStatus->save();

        // TFTDB
        $machineStatus = new MachineStatus();
        $machineStatus->id_machine = $dataMachines[14]->id;
        if ($request->tftdb === 'operative') {
            $machineStatus->status = 'Operativa';
        } elseif ($request->tftdb === 'non-operative') {
            $machineStatus->status = 'No Operativa';
        } elseif ($request->tftdb === 'operative-wl') {
            $machineStatus->status = 'Operativa con Limitantes';
        }
        $machineStatus->date_register = $now;
        $machineStatus->limitation = $request->tftdblimitant;
        $machineStatus->save();


        $statusOK = true;

        return redirect()->route('formulariomaquinas')->with(['statusOK' => $statusOK]);
        // return back('/formulariomaquinas')->with('statusOK', $statusOK);
    }
}
