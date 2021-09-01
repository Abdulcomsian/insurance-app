@extends(config('LaravelLogger.loggerBladeExtended'),["page_title"=>"Activity Log"])

@section('css')
@include('LaravelLogger::partials.styles')
@endsection

@section('template_title')
    {{ trans('LaravelLogger::laravel-logger.dashboard.title') }}
@endsection

@php
    switch (config('LaravelLogger.bootstapVersion')) {
        case '4':
        $containerClass = 'card';
        $containerHeaderClass = 'card-header';
        $containerBodyClass = 'card-body';
        break;
        case '3':
        default:
        $containerClass = 'panel panel-default';
        $containerHeaderClass = 'panel-heading';
        $containerBodyClass = 'panel-body';
    }
    $bootstrapCardClasses = (is_null(config('LaravelLogger.bootstrapCardClasses')) ? '' : config('LaravelLogger.bootstrapCardClasses'));
@endphp

@section('content')

    <div class="container-fluid">
       @if(config('LaravelLogger.enableSearch'))
       @include('LaravelLogger::partials.form-search')
       @endif
       @if(config('LaravelLogger.enablePackageFlashMessageBlade'))
       @include('LaravelLogger::partials.form-status')
       @endif

        <div class="row">
            <div class="col-sm-12">
                <div class="{{ $containerClass }} {{ $bootstrapCardClasses }}">
                    <div class="{{ $containerHeaderClass }}">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            @if(config('LaravelLogger.enableSubMenu'))

                            <span>
                                {!! trans('LaravelLogger::laravel-logger.dashboard.title') !!}
                                <small>
                                    <sup class="label label-default">
                                        {{ $totalActivities }} {!! trans('LaravelLogger::laravel-logger.dashboard.subtitle') !!}
                                    </sup>
                                </small>
                            </span>

                            <div class="btn-group pull-right btn-group-xs">
                                <button type="button" class="btn btn-default dropdown-toggle logsBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v fa-fw" aria-hidden="true"></i>
                                    <span class="sr-only">
                                        {!! trans('LaravelLogger::laravel-logger.dashboard.menu.alt') !!}
                                    </span>
                                </button>
                                @if(config('LaravelLogger.bootstapVersion') == '4')
                                <div class="dropdown-menu dropdown-menu-right logsDropDown">
                                    @include('LaravelLogger::forms.clear-activity-log')
                                    <a href="{{route('cleared')}}" class="dropdown-item">
                                        <i class="fa fa-fw fa-history" aria-hidden="true"></i>
                                        {!! trans('LaravelLogger::laravel-logger.dashboard.menu.show') !!}
                                    </a>
                                </div>
                                @else
                                <ul class="dropdown-menu dropdown-menu-right logsDropDown">
                                    <li class="dropdown-item">
                                        @include('LaravelLogger::forms.clear-activity-log')
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{route('cleared')}}">
                                            <i class="fa fa-fw fa-history" aria-hidden="true"></i>
                                            {!! trans('LaravelLogger::laravel-logger.dashboard.menu.show') !!}
                                        </a>
                                    </li>
                                </ul>
                                @endif
                            </div>

                            @else
                            {!! trans('LaravelLogger::laravel-logger.dashboard.title') !!}
                            <span class="pull-right label label-default">
                                {{ $totalActivities }}
                                <span class="hidden-sms">
                                    {!! trans('LaravelLogger::laravel-logger.dashboard.subtitle') !!}
                                </span>
                            </span>
                            @endif

                        </div>
                    </div>
                    <div class="{{ $containerBodyClass }}">
                        @include('LaravelLogger::logger.partials.activity-table', ['activities' => $activities, 'hoverable' => true])
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('LaravelLogger::modals.confirm-modal', ['formTrigger' => 'confirmDelete', 'modalClass' => 'danger', 'actionBtnIcon' => 'fa-trash-o'])

@endsection
@section('script')
    @include('LaravelLogger::partials.scripts', ['activities' => $activities])
    @include('LaravelLogger::scripts.confirm-modal', ['formTrigger' => '#confirmDelete'])
    @if(config('LaravelLogger.enableDrillDown'))
        @include('LaravelLogger::scripts.clickable-row')
        @include('LaravelLogger::scripts.tooltip')
    @endif
    <script>
        $(".logsBtn").click(function (e) {
            e.preventDefault();
            if($(".logsDropDown").css("display")=="none"){
                $(".logsDropDown").css("display","block")
            } else
                $(".logsDropDown").css("display","none")
        })
    </script>
@endsection
