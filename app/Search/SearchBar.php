<?php

namespace App\Search;

use App\Models\Qz;
use App\Models\User;
use App\Models\Event;
use App\Models\Grade;
use App\Models\Hourly;
use App\Models\Worker;
use App\Models\Payment;
use App\Models\Service;
use App\Models\Category;
use App\Models\Formation;
use App\Models\Requester;
use App\Models\Secretary;
use App\Enums\RoleUserEnum;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchBar
{
    public function __construct(private Request $request) {}


    public function userSecretary(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? User::with(['secretary'])
            ->orderByDesc('updated_at')
            ->where('role', '=', RoleUserEnum::ROLE_SECRETARY->value)
            ->paginate()
            : User::with(['secretary'])
            ->orderByDesc('updated_at')
            ->where('role', '=', RoleUserEnum::ROLE_SECRETARY->value)
            ->where('name', 'like', "%$query%")
            ->orWhere('email', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }

    public function userRequester(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? User::with(['requester'])
            ->orderByDesc('updated_at')
            ->where('role', '=', RoleUserEnum::ROLE_REQUESTER->value)
            ->paginate()
            : User::with(['requester'])
            ->orderByDesc('updated_at')
            ->where('role', '=', RoleUserEnum::ROLE_REQUESTER->value)
            ->where('name', 'like', "%$query%")
            ->orWhere('email', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }


    public function hourly(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Hourly::orderByDesc('updated_at')
            ->paginate()
            : Hourly::orderByDesc('updated_at')
            ->where('day', 'like', "%$query%")
            ->orWhere('end', 'like', "%$query%")
            ->orWhere('start', 'like', "%$query%")
            ->orWhere('lock', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }


    public function secretary(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Secretary::orderByDesc('updated_at')
            ->paginate()
            : Secretary::orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('firstname', 'like', "%$query%")
            ->orWhere('sex', 'like', "%$query%")
            ->orWhere('phone', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }

    public function grade(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Grade::orderByDesc('updated_at')
            ->paginate()
            : Grade::orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }

    public function worker(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Worker::with(['grade'])
            ->orderByDesc('updated_at')
            ->paginate()
            : Worker::with(['grade'])
            ->orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('firstname', 'like', "%$query%")
            ->orWhere('sex', 'like', "%$query%")
            ->orWhere('phone', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }


    public function requester(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Requester::with(['user'])
            ->orderByDesc('updated_at')
            ->paginate()
            : Requester::with(['user'])
            ->orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('firstname', 'like', "%$query%")
            ->orWhere('sex', 'like', "%$query%")
            ->orWhere('phone', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }

    public function appointment(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Appointment::with(['requester', 'secretary', 'hourly', 'worker'])
            ->orderByDesc('updated_at')
            ->paginate()
            : Appointment::with(['requester', 'secretary', 'hourly', 'worker'])
            ->orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('approved', 'like', "%$query%")
            ->paginate();
    }
}
