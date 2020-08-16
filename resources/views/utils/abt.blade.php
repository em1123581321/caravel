@extends('utils.abouttmpl')

@section('description')
    <div class="cmParagraph">

        <div class="cmText">
            <cloudmr-tag></cloudmr-tag> is multi-year project that will develop a comprehensive software platform for the design and evaluation of radiofrequency coils for applications in magnetic resonance imaging. The goal of <cloudmr-tag></cloudmr-tag> is to integrate multiple software tools into a flexible package, with an intuitive, standardized web-based graphical user interface and a modular architecture, to allow straightforward creation of stand-alone applications and incorporation of additional software components.
            <ul> <li>Principal Investigator: <a href="https://med.nyu.edu/faculty/riccardo-lattanzi" target="_blank">Riccardo Lattanzi, PhD</a> </li> <li>Head of Software Development: <a href="https://cai2r.net/people/eros-montin" target="_blank">Eros Montin, PhD </a> </li> </ul> </div> </div>


@endsection
@section('doc')

<div class="cmParagraph">
    <div class="cmText"> Our C++ sources with annotated Doxygen documentation are available. User manuals and video tutorials will be available in the future.
    </div> </div>
@endsection


@section('collaborate')

      <div class="cmParagraph"> <div class="cmText"> <a href="/contact" target="_blank">Contact us</a> if you are interested in making your software tools for MRI available through the <span class="cloudmrTag">Cloud MR</span> portal. </div> </div>
@endsection

@section('ack')
    <div class="cmParagraph">  <div class="cmText"> Cloud MR is based on HTML 5, JavaScript, CSS, PhP/MySQL</div></div>
@endsection

@section('funding')
    <div class="cmParagraph">  <div class="cmText"> This research project is supported by the <a href="https://www.nibib.nih.gov/" target="_blank">National Institute Of Biomedical Imaging And Bioengineering </a>of the National Institutes of Health under Award Number <span style="text-weight:bold">R01EB024536</span>. The content of this website is solely the responsibility of the authors and does not necessarily represent the official views of the National Institutes of Health. </div> </div>

@endsection

