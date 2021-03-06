@extends('adforest.layout.master')


@section('template_title', __('advertisement.add_advertisement'))

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => isset($breadcrumbs) ? $breadcrumbs : []])
@endsection

@section('content')
    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">

                    <div class="ad-box">
                        <div class="text-center margin-bottom-40 margin-top-40">
                            <h1>@lang('advertisement.what_you_are_listing')</h1>
                        </div>
                        <hr>
                        @foreach(\App\Models\Category::parents()->get() as $category)
                            <div class="col-md-3" style="padding: 20px;">
                                <a href="{{ url('AddAdv/' . $category->id) }}" class="col-md-12 btn btn-default ajax">
                                    {{ $category->name }}
                                </a>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                        <div id="results"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', 'a.ajax', function (e) {
                e.preventDefault();
                var a = $(this);
                $.get(a.attr('href'), function (data) {
                    $('#results').html(data);
                });
            });
        });
    </script>
@endsection