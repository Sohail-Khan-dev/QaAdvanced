<main role="main" class="col-md-9 ms-auto col-lg-10 px-4" style="margin-left: 10rem;">
    <div class="d-flex align-items-center justify-content-between py-3">
        <h2 class="mb-0">Topic Dashboard</h2>
        <button class="btn btn-primary" id='new-topic-btn' data-bs-toggle="modal" data-bs-target="#new-topic-modal"> Create New Topic</button>
    </div>
    @include('dashboard.modals.new-topic')     
    <div class="table-responsive">
        <table id="dataTable" class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>title</th>
                    <th>content</th>
                    <th style="max-width: 10%">action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</main>