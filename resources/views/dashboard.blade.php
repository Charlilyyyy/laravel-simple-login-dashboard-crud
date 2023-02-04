@include('link.bootstrap')
<form name="logout-form" id="login-form" method="get" action="/">
    @csrf
    <div class="mt-2 mx-2 d-flex justify-content-between">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><-></button>
        <h1>YOUR DASHBOARD</h1>
        <button type="submit" class="btn btn-danger">logout</button>
    </form>
    

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">MAIN MENU</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body row">
                <a href="/biodata" class="col-12 ">Biodata</a>
                <a href="/address" class="col-12 ">Address</a>
                <a href="/bodycomposition" class="col-12">Body Composition</a>
            </div>
        </div>
    </div>

