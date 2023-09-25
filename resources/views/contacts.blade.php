@extends("layouts.public")

@section("title", "La Molisana - Contact us")

@section("content")

  <main>
    <div class="container mt-3">
      <div class="text-center mt-3">
        <h2 class="mt-3">Benvenuto nella sezione Contacts</h2>
      </div>
    </div>

    <div class="container py-3 min-vh-100 d-flex flex-column">
      <div class="card shadow rounded-3 my-auto">
        <div class="card-header p-3 h4">
          Contact Us
        </div>
        <div class="card-body p-4">
          <form role="form" class="row">
            <div class="form-group col-lg-4">
              <label class="form-control-label" for="form-group-input">Name</label>
              <input type="text" class="form-control" id="form-group-input" name="name">
            </div>
            <div class="form-group col-lg-4">
              <label class="form-control-label" for="form-group-input">Email</label>
              <input type="text" class="form-control" id="form-group-input" name="email">
            </div>
            <div class="form-group col-lg-4">
              <label class="form-control-label" for="form-group-input">Purpose of Request</label>
              <select size="0" class="form-control" name="reason">
                <option>Sales</option>
                <option>Tech Support</option>
                <option>General Feedback</option>
              </select>
            </div>
            <div class="form-group col-lg-12">
              <label class="form-control-label" for="form-group-input">Notes</label>
              <textarea class="form-control" id="form-group-input" name="notes" rows="6"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button class="btn btn-warning float-end mt-2" for="form-group-input">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

@endsection

