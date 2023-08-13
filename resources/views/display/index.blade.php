@extends('layout.call_page')
@section('content')
<!-- BEGIN: Page Main-->
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<div id="main" class="no-print" style="padding: 15px 15px 0px;">

    <div class="wrapper" style=" min-height: 557px;" id="display-page">
        <section class="content-wrapper no-print">
            <div id="callarea" class="row" style="line-height:1.23;display:flex; flex-direction:row-reverse">
                <div class="col m4">
                    <div class="card-panel center-align p-0" style="margin-bottom:0;height:74vh" id="side-token-display">
                        <div style="border-bottom:1px solid #ddd;height:25%;display:flex;flex-direction:row;justify-content:center;align-items:center">
                            <div>
                                <span v-if="tokens[1]" class="bolder-color" style="font-size:45px;font-weight:bold;line-height:1.2">@{{tokens[1]?.token_letter}}-@{{tokens[1]?.token_number}}</span>
                                <span v-if="!tokens[1]" class="bolder-color" style="font-size:45px;font-weight:bold;line-height:1.2">-</span><br>
                                <small v-if="tokens[1]" class="bolder-color" id="counter1" style="font-size:25px; font-weight:bold;">@{{tokens[1]?.counter.name}}</small>
                                <small v-if="!tokens[1]" class="bolder-color" id="counter1" style="font-size:25px; font-weight:bold;"></small><br>
                                <small v-if="!tokens[1]" style="font-size:20px;"></small>
                            </div>
                        </div>
                        <div style="border-bottom:1px solid #ddd;height:25%;display:flex;flex-direction:row;justify-content:center;align-items:center">
                            <div>
                                <span v-if="tokens[2]" class="bolder-color" style="font-size:45px; font-weight:bold;line-height:1.2">@{{tokens[2]?.token_letter}}-@{{tokens[2]?.token_number}}</span>
                                <span v-if="!tokens[2]" class="bolder-color" style="font-size:45px; font-weight:bold;line-height:1.2">-</span><br>
                                <small v-if="tokens[2]" class="bolder-color" id="counter2" style="font-size:25px;font-weight:bold;">@{{tokens[2]?.counter.name}}</small>
                                <small v-if="!tokens[2]" class="bolder-color" id="counter2" style="font-size:25px;font-weight:bold;"></small><br>

                                <small v-if="!tokens[2]" style="font-size:20px; font-weight:bold;"></small>
                            </div>
                        </div>
                        <div style="height:25%;border-bottom:1px solid #ddd;display:flex;flex-direction:row;justify-content:center;align-items:center">
                            <div>
                                <span v-if="tokens[3]" class="bolder-color" style="font-size:45px;font-weight:bold;line-height:1.2">@{{tokens[3]?.token_letter}}-@{{tokens[3]?.token_number}}</span>
                                <span v-if="!tokens[3]" class="bolder-color" style="font-size:45px;font-weight:bold;line-height:1.2">-</span><br>
                                <small v-if="tokens[3]" class="bolder-color" id="counter3" style="font-size:25px; font-weight:bold;">@{{tokens[3]?.counter.name}}</small>
                                <small v-if="!tokens[3]" class="bolder-color" id="counter3" style="font-size:25px; font-weight:bold;"></small><br>

                                <small v-if="!tokens[3]" style="font-size:20px; font-weight:bold;"></small>
                            </div>
                        </div>
                        <div style="height:25%;display:flex;flex-direction:row;justify-content:center;align-items:center">
                            <div>
                                <span v-if="tokens[4]" class="bolder-color" style="font-size:45px;font-weight:bold;line-height:1.2">@{{tokens[4]?.token_letter}}-@{{tokens[4]?.token_number}}</span>
                                <span v-if="!tokens[4]" class="bolder-color" style="font-size:45px;font-weight:bold;line-height:1.2">-</span><br>
                                <small v-if="tokens[4]" class="bolder-color" id="counter4" style="font-size:25px; font-weight:bold;">@{{tokens[4]?.counter.name}}</small>
                                <small v-if="!tokens[4]" class="bolder-color" id="counter4" style="font-size:25px; font-weight:bold;"></small><br>
                                <small v-if="!tokens[4]" style="font-size:20px; font-weight:bold;"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m8">
                    <div class="card-panel center-align" style="margin-bottom:0;height:25vh;display:flex;flex-direction:row;justify-content:space-between;align-items:center">
                        <div class="" style="display:flex;">
                            <span v-if="tokens[0]" style="font-size:120px;color:red;font-weight:bold;line-height:1.2;margin-right:40px">@{{tokens[0]?.token_letter}}-@{{tokens[0]?.token_number}}</span>
                            <span v-if="!tokens[0]" style="font-size:130px;color:red;font-weight:bold;line-height:1.2"></span>
                            <div v-if="!tokens[0]" style="font-size:40px; color:orange; font-weight: bold"></div>

                            <div>
                                <div v-if="tokens[0]" class="bolder-color" style="font-size:25px; line-height:1.4">{{__('messages.display.please proceed to')}}</div>
                                <div v-if="tokens[0]" id="counter0" style="font-size:60px; color:red;line-height:1.5">@{{tokens[0]?.counter.name}}</div>
                            </div>
                            
                           
                            <div v-if="!tokens[0]" style="font-size:30px; color:red;line-height:1.5">
                                
                            </div>
                          
                        </div>
                    </div>
                    <div class="h-100" style="margin-bottom:0;height:48vh;  ">
                        <div>
                            <video width="820" height="240" controls>
                                <source src="{{ $settings->video_url }}" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                              Your browser does not support the video tag.
                              </video>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom:0; margin-top: 15px;">
                <marquee><span style="font-size:{{$settings->display_font_size}}px;color:{{$settings->display_font_color}}">{{$settings->display_notification ? $settings->display_notification : 'Hello' }}<span></span></span></marquee>
            </div>
            <audio id="called_sound">
                <source src="{{asset('app-assets/audio/sound.mp3')}}" type="audio/mpeg">
            </audio>
        </section>
    </div>
</div>
@endsection
@section('b-js')
<script>
    window.JLToken = {
        get_tokens_for_display_url: "{{ asset($file) }}",
        get_initial_tokens: "{{ route('get-tokens-for-display') }}",
        date_for_display: "{{$date}}",
        voice_type: "{{$settings->language->display}}",
        voice_content_one: "{{$settings->language->token_translation}}",
        voice_content_two: "{{$settings->language->please_proceed_to_translation}}",
        date_for_display: "{{$date}}",
        audioEl: document.getElementById('called_sound'),
    }
</script>
@endsection 