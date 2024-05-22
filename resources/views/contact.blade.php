@extends('layouts.master')
@section('content')
    <main role="main" class="">
        <section>
            <div class="container">
                <h2>Contact Us</h2>
                <form id="registrationForm" action="submit_form.php" method="post">
                    <fieldset>
                        <legend>User Information</legend>
                        <label for="username">Username: </label>
                        <input type="text" class="form-control" placeholder="name@example.com" id="exampleInputEmail1" name="username" required>
                        <br><br>
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </fieldset>
                    <fieldset>
                        <legend>Messages</legend>
                        <label for="dob">Your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" cols="55"></textarea>
                    </fieldset>
                    <br><br>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </section>
    </main>
@endsection
