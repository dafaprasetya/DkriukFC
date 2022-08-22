<header class="s-header">
    <div class="box">
        <nav role="navigation">
            <div class="logo-mobi"><a href="#"> <img src="{{ asset('images/logo.png') }}" alt="image"></a></div>
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            <ul id="menu">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="..">Kembali</a></li>

            </ul>
           </div>
        </nav>
    </div>



    <nav class="nav justify-content-center mt-3">


        <ul class="ul1" id="ul1">
            <a href="{{ route('home') }}" class="smoothscroll">
                <li style="--i:#ff0000;--j:#ff0000">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                    </svg>
                    <span class="judhul">Home</span>
                </li>
            </a>
            <a href="{{ url()->previous() }}" class="smoothscroll">
                <li style="--i:#ff0000;--j:#ff0000">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    <span class="judhul">Back</span>
                </li>
            </a>



        </ul>

    </nav>




</header> <!-- end s-header -->
