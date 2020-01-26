@push('css_custom')
<style>
    .fa{
    font-weight: 900;
}
</style>
@endpush
<div class="full_sidebar pl-lg-4 pl-xs-2">

    @if(count($COMMON_WIDGETS) > 0)
    @foreach($COMMON_WIDGETS as $common_widget)
    @if(count($common_widget->datas)>0)
    <div class="row pt-2">
        <div class="col-md-12">
            <div class="sidebar-box text-center">
                <div class="side_header text-center">
                    <h5 class="m-0">{{$common_widget->title}}</h5>
                </div>
                @if($common_widget->type == 1)
                {{-- @foreach($common_widget->datas as $data)
                <div class="side_content" style="border: 1px solid rgb(199, 210, 252); margin-bottom: 5px;" title="{{$data->member->name}}">
                    <img class="w-50" src="{{ asset($data->member->image) }}" alt="{{$data->member->name}}">
                    <h5>
                        <small>{{$data->member->member_category->title}}</small><br />
                        @if($widget->popup == 1)
                             <a href="#exampleModal{{$data->id}}" data-toggle="modal" data-target="#exampleModal{{$data->id}}">{{$data->member->name}}</a>
                                @push('modal_section')
                                <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                {{$data->member->name}}
                                                <small>
                                                    @if(isset($data->member->member_subcategory->title)) ,{{$data->member->member_subcategory->title}}@endif 
                                                </small>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                      </div>
                                      <div class="modal-body text-center">
                                        <img  class="w-50" style="max-width: 200px; " src="{{ asset($data->member->image) }}" alt="{{$data->member->name}}">
                                        <h5>
                                            <small>{{$data->member->member_category->title}}</small><br />
                                            {{$data->member->name}} <small>@if(isset($data->member->member_subcategory->title)) ,{{$data->member->member_subcategory->title}}@endif </small>
                                        </h5>
                                        <p id="info" style="text-align: justify; padding: 5px; font-size: 16px;">
                                            @if($widget->short_desc == 1)
                                            {!!$data->member->info!!}
                                            @endif
                                        </p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                @endpush
                        @else
                            {{$data->member->name}}
                        @endif
                        <small>@if(isset($data->member->member_subcategory->title))&#8203;,&nbsp;{{$data->member->member_subcategory->title}}@endif </small>
                    </h5>
                    <p id="info" style="text-align: justify; padding: 5px; font-size: 16px;">
                        @if($widget->short_desc == 1)
                        {!!$data->member->info!!}
                        @endif
                    </p>
                </div>
                @endforeach --}}

                @elseif($common_widget->type == 2)
                <div class="col-sm-10 col-lg-12 offset-sm-1 side_content text-left" style="margin-top: 10px; max-height: 200px; overflow-x: auto; border-top: 1px solid #e6e6e6;">
                    <ul>
                        @foreach($common_widget->datas as $data)
                        @if($data->link_type == 3)
                        <li><span><i class="fab fa fa-angle-right"></i></span> <a target="_blank" href="{{$data->link}}">{!!$data->link_title!!}</a></li>

                        @elseif($data->link_type == 2)
                        <li><span><i class="fab fa fa-angle-right"></i></span> <a target="_blank" href="{{route('post',[$data->model_id,$data->post ? $data->post->slug : ''])}}">{{$data->post->title}}</a></li>

                        @elseif($data->link_type == 1)
                        <li><span><i class="fab fa fa-angle-right"></i></span> <a target="_blank" href="{{route('page',[$data->model_id,$data->page ? $data->page->slug : ''])}}">{{$data->page->title}}</a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
                @elseif($common_widget->type == 3)
                <div class="side_content" style="margin-top: 10px;">
                    @foreach($common_widget->datas as $data)
                    {!!$data->info_data!!}
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
    @endif
    @endforeach
    @endif
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="sidebar text-center">
                <div class="side_header">
                    <h5>Brigade Major (BM)</h5>
                </div>
                <div class="side_content" title="Abu Md Tuhin-ul Alam">
                    <img class="w-50" src="{{ asset('frontend/images/brigade_major.jpg') }}" alt="Abu Md Tuhin-ul Alam">
                    <h5>
                        <small>Major</small><br />
                        <a href="#" data-toggle="modal" data-target="#exampleModal">Abu Md Tuhin-ul Alam, <small>psc</small></a>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="sidebar text-center">
                <div class="side_header">
                    <h5>DAA&amp;QMG</h5>
                </div>
                <div class="side_content" title="Afique Hasan">
                    <img class="w-50" src="{{ asset('frontend/images/major_afique_hasan.jpg') }}" alt="Afique Hasan">
                    <h5>
                        <small>Major</small><br />
                        <a href="#">Afique Hasan</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="sidebar text-center">
                <div class="side_header">
                    <h5>GSO (3) Edn</h5>
                </div>
                <div class="side_content" title="Md. Faisal Rahman">
                    <img class="w-50" src="{{ asset('frontend/images/lt_foysal.jpg') }}" alt="Md. Faisal Rahman">
                    <h5>
                        <small>Lieutenant</small><br />
                        <a href="#">Md. Faisal Rahman</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="sidebar">
                <div class="side_header" style="margin-top: 20px; text-align: center;">
                    <h5>Policies</h5>
                </div>
                <div class="side_content" style="margin-top: 10px;">

                    <ul>
                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="#">General Staff Branch (GS)</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="#">Admin &amp; Quartering Branch</a></li>
                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="#">Establishment Branch</a></li>
                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="#">Ord Branch</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="sidebar">
                <div class="sidebar_button" style="margin-top: 20px; text-align: center">
                    <h5>
                        <a href="http://accessibledictionary.gov.bd" target="_blank" style="color: #fff;"> Accessible Dictionary</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="sidebar">
                <div class="sidebar_button" style="margin-top: 20px; text-align: center">
                    <h5>
                        <a href="https://www.army.mil.bd" target="_blank" style="color: #fff;"> Bangladesh Army</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="sidebar">
                <div class="side_header" style="margin-top: 20px; text-align: center;">
                    <h5>Web Links</h5>
                </div>
                <div class="side_content" style="margin-top: 10px;">

                    <ul>
                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="https://newmail.army.mil.bd/owa/auth/logon.aspx">Webmail <small>(Bangladesh Army)</small></a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://portal.army.mil.bd">Web Portal</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="https://ibas.finance.gov.bd/ibas2/Security/Login">iBAS Finance <small>(Live)</small></a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://training.finance.gov.bd/cgdftraining/Security/Login">iBAS Finance <small>(Training)</small></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="sidebar">
                <div class="side_header" style="margin-top: 20px; text-align: center">
                    <h5>
                        <a href="http://www.mmcr.gov.bd/admin" target="_blank" style="color: #fff;">Dashboard</a>
                    </h5>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="row">
        <div class="col-md-12">
            <div class="sidebar">
                <div class="side_header" style="margin-top: 20px; text-align: center;">
                    <h5>Hotline</h5>
                </div>
                <div class="side_content" style="margin-top: 10px;">
                    <div class="side_content" style="margin-top: 10px;">
                        <img class="w-100" src="{{ asset('frontend/images/Hotline_BN.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="row">
        <div class="col-md-12">
            <div class="sidebar">
                <div class="side_header" style="margin-top: 20px; text-align: center;">
                    <h5>Direction</h5>
                </div>
                <div class="side_content" style="margin-top: 10px;">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7294.661834865748!2d90.26500333858421!3d23.91333336393554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssavar+cantonment!5e0!3m2!1sen!2sbd!4v1562217166960!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="sidebar">
                <div class="side_header" style="margin-top: 20px; text-align: center;">
                    <h5>Useful Links</h5>
                </div>
                <div class="side_content" style="margin-top: 10px; height: 300px; overflow-x: auto;">
                    <ul>
                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://www.afd.gov.bd/">Armed Forces Division</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://joinbangladesharmy.army.mil.bd/">Join Bangladesh Army</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://offrspay.army.mil.bd/offrspay/">Offrs Pay Link</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://www.ispr.gov.bd/">ISPR</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="https://swapnochura.army.mil.bd/">Swapnochura Website</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://www.jolshiriabashon.com/">Jolshiri Abason</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://agc.com.bd/">Army Golf Club</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="https://cadetcollege.army.mil.bd/#/">Cadet College</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://www.navy.mil.bd/">Bangladesh Navy</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="https://www.issb-bd.org">Inter Services Selection Board</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://www.baf.mil.bd/">Bangladesh Air Force</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://www.mod.gov.bd/">Ministry Of Defense</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://dgdp.gov.bd/dgdp/index.php">Directorate General Defense Purchase (DGDP)</a></li>

                        <li><span><i class="fas fa-angle-right"></i></span> <a target="_blank" href="http://www.senakalyan.org/">Sena Kalyan Sangstha (SKS)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
</div>


@push('js_custom')


<script>
    $(document).ready(function(e){
        // e.preventDetault();

        var getInfoWords = $('.info').text().split(" ");
        $('.info').text(getSplitContent(getInfoWords, 100));
    });
</script>
@endpush