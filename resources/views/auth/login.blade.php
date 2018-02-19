@extends('layouts.login')

@section('content')
        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Main -->
                    <section id="main">
                        <header>
                            <span class=""><img style="width:150px; height:150px;  border-radius: 50%; " src="{{ asset('images/logo.png') }}" alt="" /></span>
                            <h1>เข้าสู่ระบบ</h1>
                            <p>โรงพยาบาลค่ายกฤษณ์สีวะรา</p>
                        </header>

                        <hr />
                        <!-- <h2>Extra Stuff!</h2> -->
                         <form role="form" method="POST" action="{{ url('/login') }}">
                         {{ csrf_field() }}

                            <div class="field">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="อีเมล์" value="{{ old('email') }}" required autofocus >

                                </div>
                            </div>

                            <div class="field">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" placeholder="รหัสผ่าน" name="password" required>

                                </div>

                            </div>


                                @if ($errors->has('email'))
                                <div class="field">
                                    <span class="help-block" >
                                        <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                </div>
                                @endif


                                <div class="field">
                    							<!-- <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label for="remember">จำรหัสผ่าน</label><b>| </b> -->
                                  <a class="btn btn-link" href="{{ route('password.request') }}"> ลืมรหัสผ่าน?

                                </a>
                            </div>

                            <!-- <div class="field">
                                <div class="select-wrapper">
                                    <select name="department" id="department">
                                        <option value="">Department</option>
                                        <option value="sales">Sales</option>
                                        <option value="tech">Tech Support</option>
                                        <option value="null">/dev/null</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
                            </div>

                            <div class="field">
                                <label>But are you a robot?</label>
                                <input type="radio" id="robot_yes" name="robot" /><label for="robot_yes">Yes</label>
                                <input type="radio" id="robot_no" name="robot" /><label for="robot_no">No</label>
                            </div>-->
                            <ul class="actions">
                                <li><!-- <a href="#" class="button">ล็อกอิน</a> -->
                                    <button type="submit" class="button" /><i class="fas fa-sign-in-alt"></i> ล็อกอิน !</button></li>

                            </ul>
                            <a href="{{route('main')}}" class=""><i class="fas fa-long-arrow-alt-left"></i> กลับไปหน้าเว็บไซต์ </a>
                        </form>
                         <footer>


                            <!--<ul class="icons">
                                <li><a href="#" class="fa-twitter">Twitter</a></li>
                                <li><a href="#" class="fa-instagram">Instagram</a></li>
                                <li><a href="#" class="fa-facebook">Facebook</a></li>
                            </ul>-->
                        </footer>
                    </section>

                <!-- Footer -->
                    <footer id="footer">
                        <ul class="copyright">
                            <li>&copy; KSVRHOSPITAL - All Rights Reserved | Design: <a href="#">DS</a>.</li>

                        </ul>
                    </footer>

            </div>

        <!-- Scripts -->
            <!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
@endsection
@section('scripts')
  <script>
      if ('addEventListener' in window) {
          window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
          document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
      }
  </script>
@endsection
