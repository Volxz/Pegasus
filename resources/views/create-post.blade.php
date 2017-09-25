@extends('layouts.app')

@section('content')

<section class="section-space-padding">
    <div class="container">
        <br>
        <br><br>
        <h1 class="text-center">Submit your work</h1>

        <div class="margin-top-30 margin-bottom-50">
            <div class="row">

                <div class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">

                    <div class="row">

                        <form class="contact-us pattern-bg">


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First and Last name">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="LJCDS email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <select id="subject" class="form-group form-control">
                                    <option value="" selected disabled>Type</option>
                                    <option>Poetry</option>
                                    <option>Art</option>
                                    <option>Short Fiction</option>
                                    <option>Essays</option>

                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <div class="textarea-message  form-group">
                                    <textarea id="message" class="textarea-message form-control" placeholder="Writing"
                                              rows="5"></textarea>
                                </div>


                            {{--<input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1 hide center-block"--}}
                                   {{--accept=".png, .jpg, jpeg" data-multiple-caption="{count} files selected" multiple/>--}}
                            {{--<label for="file-1" class="center-block">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">--}}
                                    {{--<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>--}}
                                {{--</svg>--}}
                                {{--<span class="text-center">Choose a file&hellip;</span></label>--}}

                            <input type="file" class="center-block btn btn-primary"accept=".png, .jpg, jpeg" style = " border: none;font-size: 20px;" name="fileToUpload" id="fileToUpload">
                            <p class="text-center" style="font-size:10px; font-style: italic;">Png, jpg, jpeg ONLY |
                                Please use writing section for written work.</p>
                            <br>
                            <div class="text-center">
                                <button type="submit"
                                        class="button button-style button-style-dark button-style-color-2 sec">Submit
                                </button>
                            </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection