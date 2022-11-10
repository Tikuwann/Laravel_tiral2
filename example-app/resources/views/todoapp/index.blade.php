<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
<section>
    <div class="accordion" id="accordionExample">

        <div class="accordion-item">{{-- //Accordion1 --}}
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            新規作成
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form class="row g-3">
                    <div class="col-md-6">
                      <label for="name" class="form-label">名前</label>
                      <input type="string" class="form-control" id="name">
                    </div>
                    <div class="col-12">
                      <label for="task" class="form-label">タスク内容</label>
                      <input type="text" class="form-control" id="task">
                    </div>
                    <div class="col-12">
                      <label for="place" class="form-label">場所</label>
                      <input type="text" class="form-control" id="place" placeholder="">
                    </div>

                    <label for="start_date" class="form-label">日付</label>
                    <p>
                        {{-- <input type="date" name="start_date" value=""> --}}
                        <input type="date" name="start_date" />
                        <span class="input-group-addon">to</span>
                        <input type="date" name="end_date" />
                    </p>
                    {{-- <p><input type="date" name="start_date" value=""></p> --}}
                    {{-- <div class="input-daterange input-group" id="datepicker"> --}}

</div>
                      </div>



                    {{-- <div class="col-md-6">
                        <label for="start_date" class="form-label">開始日時</label>
                        <input type="text" class="form-control" id="start_date">
                      </div>
                      <div class="col-md-6">
                        <label for="end_date" class="form-label">終了日時</label>
                        <input type="email" class="form-control" id="end_date">
                      </div> --}}

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary" value="add">Sign in</button>
                    </div>
                </form>
            </div>
          </div>
        </div>{{-- //Accordion1 --}}

        <div class="accordion-item">{{-- //Accordion2 --}}
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>        {{-- //Accordion2 --}}

        <div class="accordion-item">        {{-- //Accordion3 --}}
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              新規作成
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form class="row g-3">
                    <div class="col-md-6">
                      <label for="name" class="form-label">名前</label>
                      <input type="email" class="form-control" id="name">
                    </div>
                    <div class="col-12">
                      <label for="task" class="form-label">タスク内容</label>
                      <input type="password" class="form-control" id="task">
                    </div>
                    <div class="col-12">
                      <label for="place" class="form-label">場所</label>
                      <input type="text" class="form-control" id="place" placeholder="">
                    </div>

                    <div class="flex items-center justify-center">
                        <div class="datepicker relative form-floating mb-3 xl:w-96" data-mdb-toggle-button="false">
                          <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Select a date" />
                          <label for="floatingInput" class="text-gray-700">Select a date</label>
                          <button class="datepicker-toggle-button" data-mdb-toggle="datepicker">
                            <i class="fas fa-calendar datepicker-toggle-icon"></i>
                          </button>
                        </div>
                      </div>

                    <div class="col-md-6">
                        <label for="start_date" class="form-label">開始日時</label>
                        <input type="text" class="form-control" id="start_date">
                      </div>
                      <div class="col-md-6">
                        <label for="end_date" class="form-label">終了日時</label>
                        <input type="email" class="form-control" id="end_date">
                      </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
          </div>
        </div>        {{-- //Accordion3 --}}

      </div>
</section>
  </body>
</html>
