@can('view_users')
<li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }}">
    <a class="waves-effect waves-dark" href="{!! route('admin.users.index') !!}">
        <i class="nav-icon fa fa-users"></i>
        <span class="hide-menu">@lang('backend.Users')</span>
    </a>
</li>
@endcan

@can('view_roles')
{{-- <li class="nav-item {{ Request::is('admin/roles*') ? 'active' : '' }}">
    <a class="waves-effect waves-dark" href="{!! route('admin.roles.index') !!}">
        <i class="nav-icon fa fa-list"></i>
        <span class="hide-menu">@lang('backend.Roles')</span>
    </a>
</li> --}}
@endcan

@can('view_service')
<li class="{{ Request::is('admin/services*') ? 'active' : '' }}">
    <a href="{{ route('admin.services.index') }}"><i class="fa fa-edit"></i><span>@lang('models/services.plural')</span></a>
</li>
@endcan
@can('view_page')
<li class="{{ Request::is('admin/pages*') ? 'active' : '' }}">
    <a href="{{ route('admin.pages.index') }}"><i class="fa fa-edit"></i><span>@lang('models/pages.plural')</span></a>
</li>
@endcan

<li class="nav-item {{ Request::is('admin/settings*') ? 'active' : '' }}">
    <a class="waves-effect waves-dark" href="{!! route('admin.settings.index') !!}">
        <i class="nav-icon fa fa-cog"></i>
        <span class="hide-menu">@lang('models/settings.plural')</span>
    </a>
</li>





@can('view_contacts')
<li class="{{ Request::is('admin/contacts*') ? 'active' : '' }}">
    <a href="{{ route('admin.contacts.index') }}"><i class="fa fa-edit"></i><span>@lang('models/contacts.plural')</span></a>
</li>
@endcan

