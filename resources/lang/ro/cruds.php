<?php

return [
    'userManagement'  => [
        'title'          => 'Gestiune utilizatori',
        'title_singular' => 'Gestiune utilizatori',
    ],
    'permission'      => [
        'title'          => 'Permisiuni',
        'title_singular' => 'Permisiune',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'            => [
        'title'          => 'Roluri',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'            => [
        'title'          => 'Utilizatori',
        'title_singular' => 'Utilizator',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'Name',
            'name_helper'               => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => ' ',
            'password'                  => 'Password',
            'password_helper'           => ' ',
            'roles'                     => 'Roles',
            'roles_helper'              => ' ',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'approved'                  => 'Approved',
            'approved_helper'           => ' ',
            'verified'                  => 'Verified',
            'verified_helper'           => ' ',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => ' ',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => ' ',
        ],
    ],
    'region'          => [
        'title'          => 'Judete',
        'title_singular' => 'Judete',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'denj'              => 'Judet',
            'denj_helper'       => ' ',
            'mnemonic'          => 'Mnemonic',
            'mnemonic_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'place'           => [
        'title'          => 'Localitati',
        'title_singular' => 'Localitati',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'denloc'            => 'Localitate',
            'denloc_helper'     => ' ',
            'region'            => 'Region',
            'region_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'profile'         => [
        'title'          => 'Profiles',
        'title_singular' => 'Profile',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'username'          => 'Username',
            'username_helper'   => ' ',
            'phone'             => 'Phone Number',
            'phone_helper'      => ' ',
            'credit'            => 'Credit',
            'credit_helper'     => ' ',
            'featured'          => 'Featured',
            'featured_helper'   => ' ',
            'region'            => 'Region',
            'region_helper'     => ' ',
            'place'             => 'Place',
            'place_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'address'           => 'Adresa',
            'address_helper'    => ' ',
        ],
    ],
    'address'         => [
        'title'          => 'Adrese',
        'title_singular' => 'Adrese',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nume adresa',
            'name_helper'       => ' ',
            'region'            => 'Judet',
            'region_helper'     => ' ',
            'place'             => 'Localitate',
            'place_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'category'        => [
        'title'          => 'Categori',
        'title_singular' => 'Categori',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nume',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'subcategory'     => [
        'title'          => 'Subcategori',
        'title_singular' => 'Subcategori',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nume',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'category'          => 'Categorie',
            'category_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'product'         => [
        'title'          => 'Produse',
        'title_singular' => 'Produse',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'slug'               => 'Slug',
            'slug_helper'        => ' ',
            'description'        => 'Descriere Produs',
            'description_helper' => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'gallery'            => 'Imagini Produs',
            'gallery_helper'     => ' ',
            'featured'           => 'Featured',
            'featured_helper'    => ' ',
            'address'            => 'Adresa',
            'address_helper'     => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'created_by'         => 'Creat de',
            'created_by_helper'  => ' ',
            'category'           => 'Categorie',
            'category_helper'    => ' ',
            'subcategory'        => 'Subcategorie',
            'subcategory_helper' => ' ',
        ],
    ],
    'featuredProduct' => [
        'title'          => 'Produse Featured',
        'title_singular' => 'Produse Featured',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'active'                     => 'Active',
            'active_helper'              => ' ',
            'product'                    => 'Produs',
            'product_helper'             => ' ',
            'profile'                    => 'Profil',
            'profile_helper'             => ' ',
            'show_on_region'             => 'Judet',
            'show_on_region_helper'      => ' ',
            'show_on_place'              => 'Localitate',
            'show_on_place_helper'       => ' ',
            'show_on_category'           => 'Categorie',
            'show_on_category_helper'    => ' ',
            'show_on_subcategory'        => 'Subcategorie',
            'show_on_subcategory_helper' => ' ',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
            'created_by'                 => 'Created By',
            'created_by_helper'          => ' ',
            'views'                      => 'Views',
            'views_helper'               => ' ',
        ],
    ],
];
