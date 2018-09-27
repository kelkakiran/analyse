@extends('layouts.app')

@section('content')
    <section id="content">
        <section class="main padder">
            <div class="clearfix">
                <h4><i class="fa fa-edit"></i>{{ __('Post new Job Requirement') }}</h4>
            </div>
            <div class="row">
                <form class="form-horizontal" method="post" data-validate="parsley">
                    @csrf
                    <div class="col-sm-6">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">{{ __('Job Title') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="title" placeholder="Enter job title"
                                               class="form-control @if ($errors->has('title')) parsley-validated parsley-error @endif"
                                                value="{{ old('title') }}">
                                        @if ($errors->has('title'))
                                            <ul id="error-title" class="parsley-error-list" style="display: block;">
                                                <li class="type" style="display: list-item;"></li>
                                                <li class="required" style="display: list-item;">{{ $errors->first('title') }}</li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">{{ __('Position') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="position" placeholder="Enter job position"
                                               class="form-control @if ($errors->has('position')) parsley-validated parsley-error @endif"
                                                value="{{ old('position') }}">
                                        @if ($errors->has('position'))
                                            <ul id="error-title" class="parsley-error-list" style="display: block;">
                                                <li class="type" style="display: list-item;"></li>
                                                <li class="required" style="display: list-item;">{{ $errors->first('position') }}</li>
                                            </ul>
                                        @endif
                                        <div class="line line-dashed m-t-large"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">{{ __('Job Location') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="location" placeholder="Job location"
                                               class="form-control @if ($errors->has('location')) parsley-validated parsley-error @endif"
                                                value="{{ old('location') }}">
                                        @if ($errors->has('location'))
                                            <ul id="error-title" class="parsley-error-list" style="display: block;">
                                                <li class="type" style="display: list-item;"></li>
                                                <li class="required" style="display: list-item;">{{ $errors->first('location') }}</li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">{{ __('Salary Range') }}</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="min_salary" placeholder="Range from"
                                               class="form-control @if ($errors->has('min_salary')) parsley-validated parsley-error @endif"
                                                value="{{ old('min_salary') }}">
                                        @if ($errors->has('min_salary'))
                                            <ul id="error-title" class="parsley-error-list" style="display: block;">
                                                <li class="type" style="display: list-item;"></li>
                                                <li class="required" style="display: list-item;">{{ $errors->first('min_salary') }}</li>
                                            </ul>
                                        @endif
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" name="max_salary" placeholder="Range to"
                                               class="form-control @if ($errors->has('max_salary')) parsley-validated parsley-error @endif"
                                                value="{{ old('max_salary') }}">
                                        @if ($errors->has('max_salary'))
                                            <ul id="error-title" class="parsley-error-list" style="display: block;">
                                                <li class="type" style="display: list-item;"></li>
                                                <li class="required" style="display: list-item;">{{ $errors->first('max_salary') }}</li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">{{ __('Job Description') }}</label>
                                    <div class="col-lg-8">
                                        <textarea name="description" placeholder="Write description about the job" rows="5"
                                                  class="form-control @if ($errors->has('description')) parsley-validated parsley-error @endif">{{ old('description') }}</textarea>
                                        @if ($errors->has('description'))
                                            <ul id="error-title" class="parsley-error-list" style="display: block;">
                                                <li class="type" style="display: list-item;"></li>
                                                <li class="required" style="display: list-item;">{{ $errors->first('description') }}</li>
                                            </ul>
                                        @endif
                                        <div class="checkbox">
                                            <label>
                                                <input name="agree" type="checkbox"> I agree to the <a href="#" target="_blank">terms and policy</a>.
                                            </label>
                                        </div>
                                        @if ($errors->has('agree'))
                                            <ul id="error-title" class="parsley-error-list text-danger" style="display: block;">
                                                <li class="type" style="display: list-item;"></li>
                                                <li class="required" style="display: list-item;">{{ $errors->first('agree') }}</li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3">
                                        <button type="submit" class="btn btn-primary">{{ __('Post new Job') }}</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel">
                            <div class="clearfix panel-body">
                                <div>
                                    <p>{{ __('Required Technical Skills') }}</p>
                                    @if ($errors->has('skills'))
                                        <ul id="error-title" class="parsley-error-list text-danger" style="display: block;">
                                            <li class="type" style="display: list-item;"></li>
                                            <li class="required" style="display: list-item;">{{ $errors->first('skills') }}</li>
                                        </ul>
                                    @endif
                                    <div class="m-b">
                                        <input type="hidden" name="skills" id="technical-skills" style="width:260px" value="">
                                    </div>
                                </div>
                                <div>
                                    <p>{{ __('Website') }}</p>
                                    <div class="m-b">
                                        <input type="text" name="website"
                                               class="form-control @if ($errors->has('website')) parsley-validated parsley-error @endif"
                                               id="technical-skills" style="width:260px" value="{{ old('website') }}" placeholder="https://www.example.com">
                                        @if ($errors->has('website'))
                                            <ul id="error-title" class="parsley-error-list" style="display: block;">
                                                <li class="type" style="display: list-item;"></li>
                                                <li class="required" style="display: list-item;">{{ $errors->first('website') }}</li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div>
                                    <p>{{ __('Contact E-mail') }}</p>
                                    <div class="m-b">
                                        <input type="email" name="email"
                                               class="form-control @if ($errors->has('email')) parsley-validated parsley-error @endif"
                                               id="technical-skills" style="width:260px" value="{{ old('email') }}" placeholder="dummy@example.com">
                                        @if ($errors->has('email'))
                                            <ul id="error-title" class="parsley-error-list" style="display: block;">
                                                <li class="type" style="display: list-item;"></li>
                                                <li class="required" style="display: list-item;">{{ $errors->first('email') }}</li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </section>

    @include('layouts.footer')

    <script src="/js/app.v2.js"></script>
    <script src="/js/fuelux/fuelux.js"></script>
    <script src="/js/datepicker/bootstrap-datepicker.js"></script>
    <script src="/js/slider/bootstrap-slider.js"></script>
    <script src="/js/file-input/bootstrap.file-input.js"></script>
    <script src="/js/combodate/moment.min.js"></script>
    <script src="/js/combodate/combodate.js"></script>
    <script src="/js/parsley/parsley.min.js"></script>
    <script src="/js/select2/select2.min.js"></script>

    <script>
        $("#technical-skills").select2({
            ajax: {
                url: '/api/skills',
                dataType: 'json',
                results: function (data, page) {
                    return data
                },
                cache: true
            },
            formatResult: skillFormatResult,
            formatSelection: formatRepoSelection,
            placeholder: 'Please select required skills.',
            tags: false,
            tokenSeparators: [","," "]
        });
        function skillFormatResult(topic) {
            return topic.name
        }
        function formatRepoSelection(topic) {
            return topic.name
        }
    </script>
@endsection