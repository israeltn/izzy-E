<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('basic_c_r_m_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-briefcase nav-icon">

                        </i>
                        {{ trans('cruds.basicCRM.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('crm_status_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.crm-statuses.index") }}" class="nav-link {{ request()->is('admin/crm-statuses') || request()->is('admin/crm-statuses/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon">

                                    </i>
                                    {{ trans('cruds.crmStatus.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('crm_customer_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.crm-customers.index") }}" class="nav-link {{ request()->is('admin/crm-customers') || request()->is('admin/crm-customers/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user-plus nav-icon">

                                    </i>
                                    {{ trans('cruds.crmCustomer.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('crm_note_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.crm-notes.index") }}" class="nav-link {{ request()->is('admin/crm-notes') || request()->is('admin/crm-notes/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-sticky-note nav-icon">

                                    </i>
                                    {{ trans('cruds.crmNote.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('crm_document_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.crm-documents.index") }}" class="nav-link {{ request()->is('admin/crm-documents') || request()->is('admin/crm-documents/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon">

                                    </i>
                                    {{ trans('cruds.crmDocument.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('client_management_setting_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-cog nav-icon">

                        </i>
                        {{ trans('cruds.clientManagementSetting.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('currency_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.currencies.index") }}" class="nav-link {{ request()->is('admin/currencies') || request()->is('admin/currencies/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-money-bill nav-icon">

                                    </i>
                                    {{ trans('cruds.currency.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('transaction_type_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.transaction-types.index") }}" class="nav-link {{ request()->is('admin/transaction-types') || request()->is('admin/transaction-types/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-money-check nav-icon">

                                    </i>
                                    {{ trans('cruds.transactionType.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('income_source_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.income-sources.index") }}" class="nav-link {{ request()->is('admin/income-sources') || request()->is('admin/income-sources/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-database nav-icon">

                                    </i>
                                    {{ trans('cruds.incomeSource.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('client_status_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.client-statuses.index") }}" class="nav-link {{ request()->is('admin/client-statuses') || request()->is('admin/client-statuses/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-server nav-icon">

                                    </i>
                                    {{ trans('cruds.clientStatus.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('project_status_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.project-statuses.index") }}" class="nav-link {{ request()->is('admin/project-statuses') || request()->is('admin/project-statuses/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-server nav-icon">

                                    </i>
                                    {{ trans('cruds.projectStatus.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('client_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-briefcase nav-icon">

                        </i>
                        {{ trans('cruds.clientManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('client_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.clients.index") }}" class="nav-link {{ request()->is('admin/clients') || request()->is('admin/clients/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user-plus nav-icon">

                                    </i>
                                    {{ trans('cruds.client.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('project_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.projects.index") }}" class="nav-link {{ request()->is('admin/projects') || request()->is('admin/projects/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.project.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('note_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.notes.index") }}" class="nav-link {{ request()->is('admin/notes') || request()->is('admin/notes/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-sticky-note nav-icon">

                                    </i>
                                    {{ trans('cruds.note.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('document_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.documents.index") }}" class="nav-link {{ request()->is('admin/documents') || request()->is('admin/documents/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-file-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.document.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('transaction_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.transactions.index") }}" class="nav-link {{ request()->is('admin/transactions') || request()->is('admin/transactions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-credit-card nav-icon">

                                    </i>
                                    {{ trans('cruds.transaction.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('client_report_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.client-reports.index") }}" class="nav-link {{ request()->is('admin/client-reports') || request()->is('admin/client-reports/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-chart-line nav-icon">

                                    </i>
                                    {{ trans('cruds.clientReport.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @php($unread = \App\QaTopic::unreadCount())
                <li class="nav-item">
                    <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is('admin/messenger') || request()->is('admin/messenger/*') ? 'active' : '' }} nav-link">
                        <i class="nav-icon fa-fw fa fa-envelope">

                        </i>
                        <span>{{ trans('global.messages') }}</span>
                        @if($unread > 0)
                            <strong>( {{ $unread }} )</strong>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="nav-icon fas fa-fw fa-sign-out-alt">

                        </i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>