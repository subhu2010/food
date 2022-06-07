<footer class="m-grid__item m-footer ">
    <div class="m-container m-container--fluid m-container--full-height m-page__container">
        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                <span class="m-footer__copyright">
                    {{ date('Y') }} &copy; 
                    <a href="javascript:;" class="m-link">
                        CopyRights To Positive Vibration
                    </a>
                </span>
            </div>
        </div>
    </div>
</footer>

<div id="alertMessage"></div>

<div id="m_scroll_top" class="m-scroll-top bg-primary" title="Scroll Top">
    <i class="la la-arrow-up"></i>
</div>

<style>
    .loader {
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,0.5);
        text-align: center;
        z-index: 999999;
    }

    .loader h3 {
        font-size: 15px;
        font-weight: 400;
        padding: 10px;
        margin-bottom: 0;
        margin-top:13%;
        width: 180px;
        height: 40px;
        background-position: center;
        background: white;
        box-shadow: 0 1px 15px 1px rgba(69,65,78,.08);
        color:#575962;
        display: inline-block;
    }

    .m-loader {
        width: 50px;
        display: inline-block;
    }

    .m-loader:before {
        margin-top: -13px;
        border-top-width: 3px;
        border-right-width: 3px;
    }
</style>


<script type="text/javascript" charset="utf-8" async defer>
    
    $(document).ready(function(){
        $("input, select, textarea").focus(function(event){
            $("span#"+event.target.name).hide();
        });
    });

</script>

<!-- <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{ asset('admin-assets/js/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/js/scripts.bundle.js') }}" type="text/javascript"></script>

</body>
</html>