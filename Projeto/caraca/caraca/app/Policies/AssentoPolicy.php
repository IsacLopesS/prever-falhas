<?php

namespace App\Policies;

use App\Models\Assento;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssentoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Assento  $assento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Assento $assento)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Assento  $assento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Assento $assento)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Assento  $assento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Assento $assento)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Assento  $assento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Assento $assento)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Assento  $assento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Assento $assento)
    {
        //
    }
}
