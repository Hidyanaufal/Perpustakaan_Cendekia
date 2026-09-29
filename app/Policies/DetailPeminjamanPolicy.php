<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\DetailPeminjaman;
use Illuminate\Auth\Access\HandlesAuthorization;

class DetailPeminjamanPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:DetailPeminjaman');
    }

    public function view(AuthUser $authUser, DetailPeminjaman $detailPeminjaman): bool
    {
        return $authUser->can('View:DetailPeminjaman');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:DetailPeminjaman');
    }

    public function update(AuthUser $authUser, DetailPeminjaman $detailPeminjaman): bool
    {
        return $authUser->can('Update:DetailPeminjaman');
    }

    public function delete(AuthUser $authUser, DetailPeminjaman $detailPeminjaman): bool
    {
        return $authUser->can('Delete:DetailPeminjaman');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:DetailPeminjaman');
    }

    public function restore(AuthUser $authUser, DetailPeminjaman $detailPeminjaman): bool
    {
        return $authUser->can('Restore:DetailPeminjaman');
    }

    public function forceDelete(AuthUser $authUser, DetailPeminjaman $detailPeminjaman): bool
    {
        return $authUser->can('ForceDelete:DetailPeminjaman');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:DetailPeminjaman');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:DetailPeminjaman');
    }

    public function replicate(AuthUser $authUser, DetailPeminjaman $detailPeminjaman): bool
    {
        return $authUser->can('Replicate:DetailPeminjaman');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:DetailPeminjaman');
    }

}