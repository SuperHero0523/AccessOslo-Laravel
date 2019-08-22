@extends('layouts.member_public')
@section('title', $data->meta_title)
@section('content')
<div class="wrapper-general">
  <section class="introduction">
    <div class="container wrapper-content">
        <div class="col-xs-12">
            <div class="margin_title">
            <h1>MAKE A NEW REQUEST</h1>
            <p>WE LOOK FORWARD TO HAVE YOU ON BOARD.</p>
            </div>
        </div>
    </div>
  </section>
  <section class="tabs-wrapper">
      <div class="container">
          <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8">
                    <div class="carousel-wrapper">
                        <div class="navigation">
                            <a href="javascript:void(0)" class="arrow-nav prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                            <a href="javascript:void(0)" class="arrow-nav next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="carousel-tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#airport-limousine">
                                    <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 170.67"><title>limousine</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><rect x="119.47" y="119.47" width="273.07" height="17.07"/><path d="M481.27,57.47l-59.61-6L370.72,7.64A32.56,32.56,0,0,0,349.87,0H115.75A33.32,33.32,0,0,0,87.88,15L63.7,51.2H34.13A34.17,34.17,0,0,0,0,85.33V128a8.52,8.52,0,0,0,8.53,8.53h51.2V119.47H17.07V85.33A17.08,17.08,0,0,1,34.13,68.27H68.27a8.53,8.53,0,0,0,7.09-3.8l26.73-40.06a16.35,16.35,0,0,1,13.68-7.34H349.84a15.35,15.35,0,0,1,9.81,3.56L412.56,66.2a8.61,8.61,0,0,0,4.72,2l62.29,6.23a17,17,0,0,1,15.36,17.11v27.91H460.8v17.06h42.67A8.52,8.52,0,0,0,512,128V91.61A34,34,0,0,0,481.27,57.47Z"/><path d="M93.87,85.33A42.67,42.67,0,1,0,136.53,128,42.72,42.72,0,0,0,93.87,85.33Zm0,68.27a25.6,25.6,0,1,1,25.6-25.6A25.63,25.63,0,0,1,93.87,153.6Z"/><path d="M426.67,85.33A42.67,42.67,0,1,0,469.33,128,42.72,42.72,0,0,0,426.67,85.33Zm0,68.27a25.6,25.6,0,1,1,25.6-25.6A25.63,25.63,0,0,1,426.67,153.6Z"/><rect x="68.27" y="51.2" width="349.87" height="17.07"/><rect x="221.87" y="8.53" width="17.07" height="51.2"/><rect x="315.73" y="8.53" width="17.07" height="51.2"/><rect x="128" y="8.53" width="17.07" height="51.2"/><rect x="477.87" y="85.33" width="25.6" height="17.07"/><path d="M34.13,59.73v25.6H8.53V102.4H42.67a8.52,8.52,0,0,0,8.53-8.53V59.73Z"/></g></g></svg></figure>
                                    <span>Airport limousine</span></a></li>
                                <li><a data-toggle="tab" href="#meet-greet">
                                    <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 319.99"><title>meet-greet</title><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><path d="M404.27,219.41c-10-20.95-46-50-80.73-78.13-19.37-15.66-37.67-30.46-49.34-42.13A10.7,10.7,0,0,0,263,96.65c-7.19,2.61-11.63,4.61-15.12,6.17-5.34,2.39-7.13,3.2-14.32,3.92a10.66,10.66,0,0,0-7.81,4.68c-15.08,22.55-30.7,20.63-41.13,17.13-3.33-1.11-3.92-2.54-4.24-3.91-2.24-9.36,9-31.16,23.57-45.74,34.67-34.68,52.54-43.37,90.3-26.49,42.84,19.16,85.76,34.15,86.19,34.3a10.67,10.67,0,0,0,7-20.16C387.07,66.4,345,51.7,303,32.91,254.1,11,227.26,25.44,188.93,63.8c-14.59,14.59-34.41,44.12-29.29,65.77,2.19,9.22,8.68,16,18.32,19.22,24.17,8,46.23.34,62.66-21.46,6.78-1,10.47-2.58,16-5.08,2-.89,4.35-1.94,7.47-3.2,12.2,11.46,28.67,24.79,46,38.81C341.48,183.22,377,212,385,228.62c3.95,8.22-.29,13.57-3.17,16-4.23,3.63-10,4.78-13.14,2.58a10.67,10.67,0,0,0-16.67,9.92c.73,6.79-5.48,10.67-8.17,12-6.82,3.45-13.95,2.85-16.62.38a10.78,10.78,0,0,0-11.07-2.18,10.66,10.66,0,0,0-6.82,9,20.3,20.3,0,0,1-12.59,16.35c-3.27,1.23-8,2-12.25-1.9a10.79,10.79,0,0,0-9.75-2.48,10.63,10.63,0,0,0-7.48,6.72c-.41,1.07-1.33,3.63-11.31,3.63-7.1,0-19.88-4.8-26.13-8.94-7.49-4.93-54.45-40-95-73.92-5.7-4.8-15.55-15.08-24.26-24.17-7.72-8.07-14.78-15.38-18.41-18.45a10.67,10.67,0,1,0-13.78,16.29c3.31,2.8,9.71,9.56,16.77,16.92,9.51,9.94,19.35,20.23,26,25.77,39.73,33.26,87.47,69.17,97,75.42C226,312.74,242.9,320,256,320c10.52,0,18.6-2.41,24.21-7.12a33.23,33.23,0,0,0,24.26-.26,42,42,0,0,0,22.21-20.5,41.29,41.29,0,0,0,26.77-3.86c8.56-4.31,14.74-10.9,17.81-18.6a34.92,34.92,0,0,0,24.47-8.77C408,250.4,411.35,234.11,404.27,219.41Z"/><path d="M213.33,42.66h-96a10.67,10.67,0,0,0,0,21.33h96a10.67,10.67,0,1,0,0-21.33Z"/><path d="M435.52,196.71a10.64,10.64,0,0,0-14.81-2.9l-31.18,20.95a10.67,10.67,0,0,0,6,19.52,10.54,10.54,0,0,0,5.93-1.82l31.19-21A10.68,10.68,0,0,0,435.52,196.71Z"/><path d="M369.3,247.61c-7.64-6-41.79-41-62.91-63A10.67,10.67,0,1,0,291,199.38c5.48,5.71,53.84,56.12,65.08,65a10.66,10.66,0,0,0,6.6,2.28,10.79,10.79,0,0,0,8.4-4.07A10.66,10.66,0,0,0,369.3,247.61Z"/><path d="M326.68,269c-12.78-10.22-44.89-44.33-52.14-52.23a10.68,10.68,0,0,0-15.73,14.45c.39.4,38.7,41.77,54.53,54.44A10.67,10.67,0,0,0,326.68,269Z"/><path d="M284.22,290.49c-15.21-12.82-46.33-46-52.41-52.46a10.67,10.67,0,0,0-15.6,14.57c8.75,9.37,38.53,40.94,54.25,54.21a10.67,10.67,0,1,0,13.76-16.32Z"/><path d="M124.67,24.25C106.39,6.93,33.28,1.32,11.31,0A10.66,10.66,0,0,0,0,10.66v192a10.67,10.67,0,0,0,10.67,10.67h64A10.66,10.66,0,0,0,84.8,206C86.36,201.19,123.12,88.38,128,32.91A10.61,10.61,0,0,0,124.67,24.25ZM66.88,192H21.33V22.09c34.29,2.71,71.28,8.6,84.72,15.13C100.39,83.94,74.82,167,66.88,192Z"/><path d="M501.33,21.33c-83.75,0-130.22,21.44-132.16,22.33a10.59,10.59,0,0,0-5.69,6.64A10.73,10.73,0,0,0,364.65,59c13.18,21.23,54.46,139.11,62.4,167.87a10.66,10.66,0,0,0,10.28,7.83h64A10.67,10.67,0,0,0,512,224V32A10.65,10.65,0,0,0,501.33,21.33Zm-10.66,192H445.31C435.2,180.39,405.33,94.5,388.67,59c16.28-5.52,51.25-15,102-16.21Z"/></g></g></svg></figure>
                                    <span>Meet & Greet</span></a></li>
                                <!-- <li><a data-toggle="tab" href="#handling-request">
                                    <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 375.87"><title>group-travel</title><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><path d="M451.72,169.19c-17.42-8.71-50.09-8.81-51.47-8.81a7.5,7.5,0,0,0,0,15c8.43,0,32.9,1.3,44.76,7.23a7.5,7.5,0,0,0,6.71-13.42Z"/><path d="M489.11,276l-31-8.85a3.15,3.15,0,0,1-2.27-3V253.78a56.22,56.22,0,0,0,7.17-5.89A55.15,55.15,0,0,0,479.92,208V193.71l3-6a47.76,47.76,0,0,0,5-21.28V127.79a7.5,7.5,0,0,0-7.5-7.5H408.27a47.65,47.65,0,0,0-47.6,47.59v.45a39.85,39.85,0,0,0,4.18,17.7l3.84,7.68V206a58.54,58.54,0,0,0,24.06,47.32v10.83c0,1.67,0,2.37-6.19,4.14l-15.11,4.31-43.72-15.89a7.51,7.51,0,0,0-2.05-5.75l-14-14.67V211.6c1.48-1.21,2.93-2.46,4.34-3.78a88,88,0,0,0,27.74-64V124.15a86.74,86.74,0,0,0,8-36.46V7.5a7.5,7.5,0,0,0-7.5-7.5H232a71.74,71.74,0,0,0-71.66,71.65v16a86.74,86.74,0,0,0,8,36.46v16.93A91.66,91.66,0,0,0,200.48,211v25.22l-14,14.67a7.52,7.52,0,0,0-2,5.75l-46.14,16.78a39.31,39.31,0,0,0-9.27,4.85l-7.25-3.62c21.57-9.39,28.4-22.59,28.73-23.25a7.48,7.48,0,0,0,0-6.71c-5.4-10.81-6.06-30.63-6.59-46.56-.17-5.3-.34-10.31-.65-14.77-2.56-36-29.91-63.1-63.62-63.1s-61.06,27.13-63.61,63.1c-.32,4.46-.49,9.47-.66,14.77-.53,15.93-1.18,35.75-6.59,46.56a7.48,7.48,0,0,0,0,6.71c.33.66,7.15,13.83,28.76,23.23L17.44,284.73A31.38,31.38,0,0,0,0,313v55.41a7.5,7.5,0,0,0,15,0V313a16.49,16.49,0,0,1,9.15-14.81l25.07-12.53,8.71,8.29a31.54,31.54,0,0,0,43.48,0l8.72-8.29,8.17,4.09a39.49,39.49,0,0,0-6,20.94v57.73a7.5,7.5,0,0,0,15,0V310.64a24.65,24.65,0,0,1,16.18-23.1l48.65-17.69,20.25,30.38a15.46,15.46,0,0,0,11.38,6.84c.52.05,1,.07,1.55.07a15.48,15.48,0,0,0,11-4.54l12.35-12.36v78.13a7.5,7.5,0,0,0,15,0V290.24L276,302.6a15.47,15.47,0,0,0,11,4.55c.51,0,1,0,1.54-.08a15.46,15.46,0,0,0,11.39-6.84l20.25-30.38,48.65,17.7a24.64,24.64,0,0,1,16.18,23.09v57.73a7.5,7.5,0,0,0,15,0V310.64a39.63,39.63,0,0,0-11.09-27.44l1.85-.53a40.34,40.34,0,0,0,7-2.52l19.15,19.15v69.07a7.5,7.5,0,0,0,15,0V299.3l19-19a18.41,18.41,0,0,0,3.19,1.26l31,8.85a16.63,16.63,0,0,1,12,15.92v62.05a7.5,7.5,0,0,0,15,0V306.32A31.69,31.69,0,0,0,489.11,276Zm-441-13.25c-14-5.05-21.07-11.78-24.07-15.45a83.34,83.34,0,0,0,4.27-18,55.94,55.94,0,0,0,19.8,24.42Zm43,20.3a16.56,16.56,0,0,1-22.81,0l-7-6.63a15.52,15.52,0,0,0,1.83-7.33v-8a55.64,55.64,0,0,0,33.11,0v8a15.63,15.63,0,0,0,1.82,7.33ZM79.68,248.6A40.66,40.66,0,0,1,39.06,208a7.5,7.5,0,0,0-7.5-7.5,7.12,7.12,0,0,0-1.23.11c0-.64,0-1.29.07-1.93.16-5.16.32-10,.62-14.2a55.68,55.68,0,0,1,15.16-35,46.6,46.6,0,0,1,67,0,55.68,55.68,0,0,1,15.16,35c.29,4.17.46,9,.63,14.2,0,.44,0,.89,0,1.34-8.16-12.58-20.76-21.84-37-27.07a93.68,93.68,0,0,0-28.53-4.52,7.45,7.45,0,0,0-5.19,2.29l-13.53,14A7.5,7.5,0,1,0,55.5,195.14l11.26-11.67c9.7.47,40.9,4.1,53,30.82A40.52,40.52,0,0,1,79.68,248.6Zm31.55,14.15v-8.94A55.55,55.55,0,0,0,131,229.36a82.82,82.82,0,0,0,4.27,17.92C132.31,250.92,125.24,257.71,111.23,262.75ZM183.4,141.08V122.47a7.51,7.51,0,0,0-.74-3.26,71.89,71.89,0,0,1-7.28-31.52v-16A56.73,56.73,0,0,1,232,15H336.81V87.69a71.89,71.89,0,0,1-7.28,31.52,7.51,7.51,0,0,0-.74,3.26v21.36a72,72,0,0,1-23,53c-1.86,1.74-3.78,3.36-5.76,4.88l-.13.09a72.1,72.1,0,0,1-48.67,14.52C213.2,213.9,183.4,180.83,183.4,141.08ZM225.63,292a.46.46,0,0,1-.42.15.48.48,0,0,1-.38-.23l-23.32-35L209,249l35.39,24.18Zm30.47-28.94-40.62-27.76v-14a84.48,84.48,0,0,0,34.79,10c2,.13,3.94.19,5.9.19a87,87,0,0,0,40.54-9.93v13.7Zm31.26,28.86a.48.48,0,0,1-.38.23.46.46,0,0,1-.42-.15l-18.77-18.76L303.18,249l7.5,7.88Zm137-6.33-17-17a20.51,20.51,0,0,0,.46-4.46V261a52.42,52.42,0,0,0,14.85,2.62c.58,0,1.15,0,1.73,0a55.47,55.47,0,0,0,16.54-2.51v3a17.69,17.69,0,0,0,.54,4.38Zm28.28-48.45a40.34,40.34,0,0,1-29.54,11.45c-21.7-.65-39.36-19.77-39.36-42.62v-14a7.5,7.5,0,0,0-.79-3.35l-4.63-9.27a24.64,24.64,0,0,1-2.6-11v-.45a32.64,32.64,0,0,1,32.6-32.59h64.67v31.15A32.83,32.83,0,0,1,469.5,181l-3.78,7.57a7.51,7.51,0,0,0-.8,3.35v16A40.31,40.31,0,0,1,452.59,237.13Z"/><path d="M472.42,312.75a7.5,7.5,0,0,0-7.5,7.5v48.11a7.5,7.5,0,0,0,15,0V320.25A7.5,7.5,0,0,0,472.42,312.75Z"/><path d="M39.58,322.66a7.5,7.5,0,0,0-7.5,7.5v38.2a7.5,7.5,0,0,0,15,0v-38.2A7.5,7.5,0,0,0,39.58,322.66Z"/><path d="M317.53,90.41C289.17,62,229.82,67.47,205.62,71.11a15.4,15.4,0,0,0-13.16,15.34v17.28a7.5,7.5,0,0,0,15,0V86.45a.49.49,0,0,1,.39-.5c9.67-1.46,28.85-3.71,48.73-2.38C280,85.12,296.91,91,306.93,101a7.5,7.5,0,1,0,10.6-10.61Z"/><path d="M167.88,328.79a7.5,7.5,0,0,0-7.5,7.5v32.07a7.5,7.5,0,0,0,15,0V336.29A7.5,7.5,0,0,0,167.88,328.79Z"/><path d="M344.31,328.79a7.5,7.5,0,0,0-7.5,7.5v32.07a7.5,7.5,0,0,0,15,0V336.29A7.5,7.5,0,0,0,344.31,328.79Z"/></g></g></svg></figure>
                                    <span>HANDLING REQUEST</span></a>
                                </li> -->
                                <li><a data-toggle="tab" href="#executive-charter">
                                    <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 372.15 512"><title>executive-charter</title><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><path d="M329,355.4h0a82.56,82.56,0,0,0-15.92-8.18l-46.28-19.28-32.62-21.53a7.28,7.28,0,0,0-1-.54v-14a85.12,85.12,0,0,0,46.34-64.53A38.66,38.66,0,0,0,305,162.77V113.26A113.38,113.38,0,0,0,191.74,0H183A113.38,113.38,0,0,0,69.72,113.26v49a38.65,38.65,0,0,0,24.89,65.17A85.15,85.15,0,0,0,141,291.91v13l-34,22.44a8,8,0,0,0-1.37.43L59,347.22a90.81,90.81,0,0,0-29.58,18.91C16,378.82,0,401.66,0,438.38v65.48A8.14,8.14,0,0,0,8.13,512h96a8.13,8.13,0,0,0,0-16.26h-25V435.4a8.13,8.13,0,0,0-16.26,0v60.34H16.26V438.38c0-58.56,46.34-75.19,48.28-75.86.19-.06.37-.13.54-.2l38.77-16.16,41.9,149.58H129.59a8.13,8.13,0,0,0,0,16.26H364a8.15,8.15,0,0,0,8.13-8.15V438.38C372.15,390.54,345.14,365.86,329,355.4Zm-75.32-16.65-24.49,50.33-30.37-22.36L231,333.39a8.1,8.1,0,0,0,2.2-6.69,8.76,8.76,0,0,0,.07-1v-.43Zm-49.39,52.18-6.39,17H176l-7.19-17.15,17.64-13ZM157.09,327a7.64,7.64,0,0,0,.12-1.36V309.42h0V298a84.7,84.7,0,0,0,21.55,2.78h16.67A84.7,84.7,0,0,0,217,298v26.43l-30.26,31.42Zm141.77-138.2a22.45,22.45,0,0,1-18.49,22.06V166.76A22.47,22.47,0,0,1,298.86,188.83Zm-205,22.06a22.41,22.41,0,0,1,0-44.13ZM102,142.32h0c-.28,0-.56,0-.83,0l-.25,0c-.19,0-.37,0-.55.09s-.23.06-.35.09a3.39,3.39,0,0,0-.43.11l-.39.14-.36.13-.43.21-.28.13-.41.25-.26.16c-.13.08-.25.18-.37.27l-.25.19a3,3,0,0,0-.32.29l-.26.23c-.1.1-.19.21-.28.31l-.25.27-.24.32-.23.31a3.37,3.37,0,0,0-.19.32,4.05,4.05,0,0,0-.21.35,3.18,3.18,0,0,0-.16.32l-.19.39-.12.32-.15.42-.09.34c0,.14-.08.29-.11.44s0,.24-.06.36,0,.29-.07.44,0,.26,0,.38,0,.24,0,.35A38.6,38.6,0,0,0,86,152V113.26a97.1,97.1,0,0,1,97-97h8.76a97.1,97.1,0,0,1,97,97v38.9a38,38,0,0,0-8.37-1.82v-.1c0-.18,0-.36,0-.54s0-.21,0-.32,0-.31-.07-.46-.06-.26-.09-.38l-.09-.38-.15-.42a2.83,2.83,0,0,0-.11-.31c-.06-.15-.13-.3-.19-.44s-.09-.18-.13-.27l-.24-.42a2.26,2.26,0,0,0-.16-.26c-.08-.13-.17-.25-.26-.37a2.55,2.55,0,0,0-.21-.28l-.26-.31c-.08-.1-.17-.19-.26-.29l-.26-.25-.32-.29-.27-.21-.35-.26-.3-.2-.36-.22-.36-.19-.34-.16a4.7,4.7,0,0,0-.45-.17l-.29-.11c-.17-.06-.34-.1-.51-.15l-.22-.06c-31.81-7.23-41.41-47.3-41.5-47.69a8.13,8.13,0,0,0-14.51-3c-36.16,50-114.76,50.46-116,50.46Zm8.09,73.56V158.3c20.79-1.28,76-8.2,111.52-45.38,6.13,14.42,18.82,35.47,42.53,43.65v59.31a68.78,68.78,0,0,1-68.69,68.69H178.76A68.78,68.78,0,0,1,110.07,215.88ZM141,324.44v1.23a8.08,8.08,0,0,0,.38,2.47,8.14,8.14,0,0,0,2.07,8.27l31,30.14-30.61,22.53-24.48-50.33ZM154.32,466.1l-15.94-56.92c.13,0,.25.09.38.12a8.08,8.08,0,0,0,6.77-1.35l9.85-7.25,6.85,16.37ZM166,495.74l11.54-71.54h19.09l11.54,71.54Zm45.92-78.83,6-16,9.53,7a8.06,8.06,0,0,0,6.76,1.35,8.34,8.34,0,0,0,1.91-.75l-16.2,57.86Zm144,78.83h-46.6V435.4a8.13,8.13,0,0,0-16.25,0v60.34H228.58L270.25,347l36.82,15.35.51.19a64.8,64.8,0,0,1,12.6,6.53h0c16.29,10.57,35.71,31.19,35.71,69.34Z"/><path d="M196.6,223.3a8.13,8.13,0,0,0,0-16.26h-6V188.22a8.13,8.13,0,1,0-16.25,0v26.95a8.12,8.12,0,0,0,8.12,8.13Z"/></g></g></svg></figure>
                                    <span>Executive Charter</spa></a></li>
                                <li><a data-toggle="tab" href="#group-charter">
                                    <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 375.87"><title>group-charter</title><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><path d="M451.72,169.19c-17.42-8.71-50.09-8.81-51.47-8.81a7.5,7.5,0,0,0,0,15c8.43,0,32.9,1.3,44.76,7.23a7.5,7.5,0,0,0,6.71-13.42Z"/><path d="M489.11,276l-31-8.85a3.15,3.15,0,0,1-2.27-3V253.78a56.22,56.22,0,0,0,7.17-5.89A55.15,55.15,0,0,0,479.92,208V193.71l3-6a47.76,47.76,0,0,0,5-21.28V127.79a7.5,7.5,0,0,0-7.5-7.5H408.27a47.65,47.65,0,0,0-47.6,47.59v.45a39.85,39.85,0,0,0,4.18,17.7l3.84,7.68V206a58.54,58.54,0,0,0,24.06,47.32v10.83c0,1.67,0,2.37-6.19,4.14l-15.11,4.31-43.72-15.89a7.51,7.51,0,0,0-2.05-5.75l-14-14.67V211.6c1.48-1.21,2.93-2.46,4.34-3.78a88,88,0,0,0,27.74-64V124.15a86.74,86.74,0,0,0,8-36.46V7.5a7.5,7.5,0,0,0-7.5-7.5H232a71.74,71.74,0,0,0-71.66,71.65v16a86.74,86.74,0,0,0,8,36.46v16.93A91.66,91.66,0,0,0,200.48,211v25.22l-14,14.67a7.52,7.52,0,0,0-2,5.75l-46.14,16.78a39.31,39.31,0,0,0-9.27,4.85l-7.25-3.62c21.57-9.39,28.4-22.59,28.73-23.25a7.48,7.48,0,0,0,0-6.71c-5.4-10.81-6.06-30.63-6.59-46.56-.17-5.3-.34-10.31-.65-14.77-2.56-36-29.91-63.1-63.62-63.1s-61.06,27.13-63.61,63.1c-.32,4.46-.49,9.47-.66,14.77-.53,15.93-1.18,35.75-6.59,46.56a7.48,7.48,0,0,0,0,6.71c.33.66,7.15,13.83,28.76,23.23L17.44,284.73A31.38,31.38,0,0,0,0,313v55.41a7.5,7.5,0,0,0,15,0V313a16.49,16.49,0,0,1,9.15-14.81l25.07-12.53,8.71,8.29a31.54,31.54,0,0,0,43.48,0l8.72-8.29,8.17,4.09a39.49,39.49,0,0,0-6,20.94v57.73a7.5,7.5,0,0,0,15,0V310.64a24.65,24.65,0,0,1,16.18-23.1l48.65-17.69,20.25,30.38a15.46,15.46,0,0,0,11.38,6.84c.52.05,1,.07,1.55.07a15.48,15.48,0,0,0,11-4.54l12.35-12.36v78.13a7.5,7.5,0,0,0,15,0V290.24L276,302.6a15.47,15.47,0,0,0,11,4.55c.51,0,1,0,1.54-.08a15.46,15.46,0,0,0,11.39-6.84l20.25-30.38,48.65,17.7a24.64,24.64,0,0,1,16.18,23.09v57.73a7.5,7.5,0,0,0,15,0V310.64a39.63,39.63,0,0,0-11.09-27.44l1.85-.53a40.34,40.34,0,0,0,7-2.52l19.15,19.15v69.07a7.5,7.5,0,0,0,15,0V299.3l19-19a18.41,18.41,0,0,0,3.19,1.26l31,8.85a16.63,16.63,0,0,1,12,15.92v62.05a7.5,7.5,0,0,0,15,0V306.32A31.69,31.69,0,0,0,489.11,276Zm-441-13.25c-14-5.05-21.07-11.78-24.07-15.45a83.34,83.34,0,0,0,4.27-18,55.94,55.94,0,0,0,19.8,24.42Zm43,20.3a16.56,16.56,0,0,1-22.81,0l-7-6.63a15.52,15.52,0,0,0,1.83-7.33v-8a55.64,55.64,0,0,0,33.11,0v8a15.63,15.63,0,0,0,1.82,7.33ZM79.68,248.6A40.66,40.66,0,0,1,39.06,208a7.5,7.5,0,0,0-7.5-7.5,7.12,7.12,0,0,0-1.23.11c0-.64,0-1.29.07-1.93.16-5.16.32-10,.62-14.2a55.68,55.68,0,0,1,15.16-35,46.6,46.6,0,0,1,67,0,55.68,55.68,0,0,1,15.16,35c.29,4.17.46,9,.63,14.2,0,.44,0,.89,0,1.34-8.16-12.58-20.76-21.84-37-27.07a93.68,93.68,0,0,0-28.53-4.52,7.45,7.45,0,0,0-5.19,2.29l-13.53,14A7.5,7.5,0,1,0,55.5,195.14l11.26-11.67c9.7.47,40.9,4.1,53,30.82A40.52,40.52,0,0,1,79.68,248.6Zm31.55,14.15v-8.94A55.55,55.55,0,0,0,131,229.36a82.82,82.82,0,0,0,4.27,17.92C132.31,250.92,125.24,257.71,111.23,262.75ZM183.4,141.08V122.47a7.51,7.51,0,0,0-.74-3.26,71.89,71.89,0,0,1-7.28-31.52v-16A56.73,56.73,0,0,1,232,15H336.81V87.69a71.89,71.89,0,0,1-7.28,31.52,7.51,7.51,0,0,0-.74,3.26v21.36a72,72,0,0,1-23,53c-1.86,1.74-3.78,3.36-5.76,4.88l-.13.09a72.1,72.1,0,0,1-48.67,14.52C213.2,213.9,183.4,180.83,183.4,141.08ZM225.63,292a.46.46,0,0,1-.42.15.48.48,0,0,1-.38-.23l-23.32-35L209,249l35.39,24.18Zm30.47-28.94-40.62-27.76v-14a84.48,84.48,0,0,0,34.79,10c2,.13,3.94.19,5.9.19a87,87,0,0,0,40.54-9.93v13.7Zm31.26,28.86a.48.48,0,0,1-.38.23.46.46,0,0,1-.42-.15l-18.77-18.76L303.18,249l7.5,7.88Zm137-6.33-17-17a20.51,20.51,0,0,0,.46-4.46V261a52.42,52.42,0,0,0,14.85,2.62c.58,0,1.15,0,1.73,0a55.47,55.47,0,0,0,16.54-2.51v3a17.69,17.69,0,0,0,.54,4.38Zm28.28-48.45a40.34,40.34,0,0,1-29.54,11.45c-21.7-.65-39.36-19.77-39.36-42.62v-14a7.5,7.5,0,0,0-.79-3.35l-4.63-9.27a24.64,24.64,0,0,1-2.6-11v-.45a32.64,32.64,0,0,1,32.6-32.59h64.67v31.15A32.83,32.83,0,0,1,469.5,181l-3.78,7.57a7.51,7.51,0,0,0-.8,3.35v16A40.31,40.31,0,0,1,452.59,237.13Z"/><path d="M472.42,312.75a7.5,7.5,0,0,0-7.5,7.5v48.11a7.5,7.5,0,0,0,15,0V320.25A7.5,7.5,0,0,0,472.42,312.75Z"/><path d="M39.58,322.66a7.5,7.5,0,0,0-7.5,7.5v38.2a7.5,7.5,0,0,0,15,0v-38.2A7.5,7.5,0,0,0,39.58,322.66Z"/><path d="M317.53,90.41C289.17,62,229.82,67.47,205.62,71.11a15.4,15.4,0,0,0-13.16,15.34v17.28a7.5,7.5,0,0,0,15,0V86.45a.49.49,0,0,1,.39-.5c9.67-1.46,28.85-3.71,48.73-2.38C280,85.12,296.91,91,306.93,101a7.5,7.5,0,1,0,10.6-10.61Z"/><path d="M167.88,328.79a7.5,7.5,0,0,0-7.5,7.5v32.07a7.5,7.5,0,0,0,15,0V336.29A7.5,7.5,0,0,0,167.88,328.79Z"/><path d="M344.31,328.79a7.5,7.5,0,0,0-7.5,7.5v32.07a7.5,7.5,0,0,0,15,0V336.29A7.5,7.5,0,0,0,344.31,328.79Z"/></g></g></svg></figure>
                                    <span>Group Charter</span></a></li>
                                <li><a data-toggle="tab" href="#helicopter-charter">
                                    <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.16 512.16"><title>helicopter-charter</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M503.63,495.1H461V482.3A21.12,21.12,0,0,0,439.63,461h-4.74a76.36,76.36,0,0,0-51.67-64.25,38.34,38.34,0,0,0,9.48-25.35V350L376.48,239.1a80.62,80.62,0,0,0-79.36-68.27H290.3V140.11a20.77,20.77,0,0,0-20.48-20.48H264.7V79.43L501.92,136.7h1.71c4.27,0,7.68-2.56,7.68-6.83,1.71-4.27-1.71-9.39-6-10.24L293.22,68.43l212.12-51.2c5.12-1.71,6.82-6.83,6-11.09s-6-6.83-10.24-6L255.74,59.38,10.4.16C6.14-.69,1.87,1.87.16,7-.69,11.26,1.87,15.52,7,17.23l211.69,51.1L6.14,119.63c-4.27.85-6.83,6-6,10.24A8.32,8.32,0,0,0,8.7,136.7h1.7L247.63,79.43v40.2h-5.12A20.77,20.77,0,0,0,222,140.11v30.72H215.2a80,80,0,0,0-79.36,68.27L119.63,349.18v22.18a38.29,38.29,0,0,0,9.48,25.35A76.34,76.34,0,0,0,77.44,461H72.7A21.13,21.13,0,0,0,51.36,482.3v12.8H8.7c-5.12,0-8.54,3.41-8.54,8.53s3.42,8.53,8.54,8.53H503.63c5.12,0,8.53-3.41,8.53-8.53S508.75,495.1,503.63,495.1ZM297.12,187.9c30.72,0,58,23,62.3,53.76l7.22,48.64h-64.4l28.16-28.16a8.45,8.45,0,0,0-11.94-11.95L278.35,290.3H264.7V187.9h32.42Zm-58-47.79a3.66,3.66,0,0,1,3.41-3.41h27.31a3.67,3.67,0,0,1,3.41,3.41v30.72H239.1V140.11ZM215.2,187.9h32.43V290.3H191.31l28.16-28.16a8.45,8.45,0,1,0-11.95-11.95l-40.1,40.11H145.69l7.22-48.64C158,210.08,183.63,187.9,215.2,187.9Zm-78.5,163,6.46-43.52h226l6.46,43.52v20.48A21.13,21.13,0,0,1,354.3,392.7H158a21.12,21.12,0,0,1-21.33-21.34V350.88ZM68.43,495.1V482.3A4,4,0,0,1,72.7,478H98.3a4,4,0,0,1,4.26,4.27v12.8Zm51.2,0V482.3A21.13,21.13,0,0,0,98.3,461H94.63a59.32,59.32,0,0,1,59.13-51.2v-.23a40.15,40.15,0,0,0,4.27.23H354.3a40,40,0,0,0,4.26-.23v.23A59.32,59.32,0,0,1,417.7,461H414A21.12,21.12,0,0,0,392.7,482.3v12.8Zm290.13,0V482.3A4,4,0,0,1,414,478h25.6a4,4,0,0,1,4.27,4.27v12.8Z"/></g></g></svg></figure>
                                    <span>Helicopter Charter</span></a></li>
                                <li><a data-toggle="tab" href="#cargo-chapter">
                                    <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 489.2 430.5"><title>cargo-charter</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M451.2,312.8a91.77,91.77,0,0,0-5.8-123.4,96.46,96.46,0,0,0-12.7-10.6V108.3a9.23,9.23,0,0,0-2.1-5.9L350.4,3.1A9.46,9.46,0,0,0,343.1,0H89.7a9.46,9.46,0,0,0-7.3,3.1L2.5,102l-.3.3A9.11,9.11,0,0,0,0,108.4V421.1a9.39,9.39,0,0,0,9.4,9.4H423.3c5.2,0,9.4-4.2,9.4-8.3V329.8c1.7-1.2,3.4-2.5,5.1-3.8l38.1,38.1,13.3-13.3-38-38ZM93.9,16.6h245L403.5,99H28.2L93.9,16.6ZM249.2,117.7v66.7H182.5V117.7Zm0,295H182.5V346h66.7Zm18.7,0V327.2H164.7v85.5H18.8v-295H164.7v84.5H267.9V117.8H413.8v51.1a91.72,91.72,0,1,0,0,170.9v72.9ZM432.1,305.9a73,73,0,1,1,0-103.2A73,73,0,0,1,432.1,305.9Z"/></g></g></svg></figure>
                                    <span>Cargo Charter</span></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="airport-limousine" class="tab-pane fade in active">
                                    <accessoslo-member-limousine></accessoslo-member-limousine>
                                </div>
                                <div id="meet-greet" class="tab-pane fade">
                                    <accessoslo-member-meet></accessoslo-member-meet>
                                </div>
                                <div id="handling-request" class="tab-pane fade">
                                    <div class="steps-wrapper">
                                        <accessoslo-member-handlingrequest></accessoslo-member-handlingrequest>
                                    </div>
                                </div>
                                <div id="executive-charter" class="tab-pane fade">
                                    <div class="steps-wrapper">
                                        <accessoslo-member-executive></accessoslo-member-executive>
                                    </div>
                                </div>
                                <div id="group-charter" class="tab-pane fade">
                                    <div class="steps-wrapper">
                                        <accessoslo-member-group></accessoslo-member-group>
                                    </div>
                                </div>
                                <div id="helicopter-charter" class="tab-pane fade">
                                    <div class="steps-wrapper">
                                        <accessoslo-member-helicopter></accessoslo-member-helicopter>
                                    </div>
                                </div>
                                <div id="cargo-chapter" class="tab-pane fade">
                                    <div class="steps-wrapper">
                                        <accessoslo-member-cargo></accessoslo-member-cargo>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-wrapper">
                    <div class="limousine-tab">
                        <div class="container toggle" data-toggle="collapse" data-target="#limousine-tab"><span>Airport limousine</span><span class="caret" data-toggle="collapse" data-target="#limousine-tab"><i class="fa fa-caret-up"></i></span></div>
                        <div id="limousine-tab" class="collapse tab in">
                            <accessoslo-member-mobile-limousine></accessoslo-member-mobile-limousine>
                        </div>
                    </div>
                    <div class="meet-tab">
                        <div class="container toggle" data-toggle="collapse" data-target="#meet-tab"><span>Meet & Greet</span><span class="caret" data-toggle="collapse" data-target="#meet-tab"><i class="fa fa-caret-up"></i></span></div>
                        <div id="meet-tab" class="collapse tab">
                            <accessoslo-member-mobile-meet></accessoslo-member-mobile-meet>
                        </div>
                    </div>
                    <div class="executive-tab">
                        <div class="container toggle" data-toggle="collapse" data-target="#executive-tab"><span>Executive Charter</span><span class="caret" data-toggle="collapse" data-target="#executive-tab"><i class="fa fa-caret-up"></i></span></div>
                        <div id="executive-tab" class="collapse tab">
                            <div class="steps-wrapper">
                                <accessoslo-mobile-member-executive></accessoslo-mobile-member-executive>
                            </div>
                        </div>
                    </div>
                    <div class="group-tab">
                        <div class="container toggle" data-toggle="collapse" data-target="#group-tab"><span>Group Charter</span><span class="caret" data-toggle="collapse" data-target="#group-tab"><i class="fa fa-caret-up"></i></span></div>
                        <div id="group-tab" class="collapse tab">
                            <div class="steps-wrapper">
                                <accessoslo-mobile-member-group></accessoslo-member-group>
                            </div>
                        </div>
                    </div>
                    <div class="helicopter-tab">
                        <div class="container toggle" data-toggle="collapse" data-target="#helicopter-tab"><span>Helicopter Charter</span><span class="caret" data-toggle="collapse" data-target="#helicopter-tab"><i class="fa fa-caret-up"></i></span></div>
                        <div id="helicopter-tab" class="collapse tab">
                            <div class="steps-wrapper">
                                <accessoslo-mobile-member-helicopter></accessoslo-member-helicopter>
                            </div>
                        </div>
                    </div>
                    <div class="cargo-tab">
                        <div class="container toggle" data-toggle="collapse" data-target="#cargo-tab"><span>Cargo Charter</span><span class="caret" data-toggle="collapse" data-target="#cargo-tab"><i class="fa fa-caret-up"></i></span></div>
                        <div id="cargo-tab" class="collapse tab">
                            <div class="steps-wrapper">
                                <accessoslo-mobile-member-cargo></accessoslo-member-cargo>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
      </div>
  </section>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPzXAXjAyEIcluDJSMgRRBffUCrbNq1Bc&libraries=places"></script>
@include('sweet::alert')
<script src="/js/vendor/wickedpicker.js"></script>
<script src="/js/accessoslo.js"></script>
<script>jQuery(function(){new Accessoslo.Controllers.MakeNewRequest();});</script>
<script src="/js/vendor/utils.js"></script>
<script src="/js/vendor/data.js"></script>
<script src="/js/vendor/intlTelInput.js"></script>
@endsection
