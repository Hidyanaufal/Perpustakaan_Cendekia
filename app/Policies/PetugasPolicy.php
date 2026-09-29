<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Petugas;
use Illuminate\Auth\Access\HandlesAuthorization;

class PetugasPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Petugas');
    }

    public function view(AuthUser $authUser, Petugas $petugas): bool
    {
        return $authUser->can('View:Petugas');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Petugas');
    }

    public function update(AuthUser $authUser, Petugas $petugas): bool
    {
        return $authUser->can('Update:Petugas');
    }

    public function delete(AuthUser $authUser, Petugas $petugas): bool
    {
        return $authUser->can('Delete:Petugas');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Petugas');
    }

    public function restore(AuthUser $authUser, Petugas $petugas): bool
    {
        return $authUser->can('Restore:Petugas');
    }

    public function forceDelete(AuthUser $authUser, Petugas $petugas): bool
    {
        return $authUser->can('ForceDelete:Petugas');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Petugas');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Petugas');
    }

    public function replicate(AuthUser $authUser, Petugas $petugas): bool
    {
        return $authUser->can('Replicate:Petugas');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Petugas');
    }

}