@include("site.includes.header")

    <div id="header" class="main-header-top">

        @include("site.includes.top-nav-bar")

        @include("site.includes.mid-nav-bar")

        @include("site.includes.menu-bar")

    </div>

    <!-- location Modal -->
    <div class="modal fade" id="location" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="locationLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="locationLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    @yield("content")

@include("site.includes.footer")