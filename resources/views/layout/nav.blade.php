<nav class="classy-navbar justify-content-between">

                        <!-- Subscribe btn -->
                        <div class="subscribe-btn">
                            <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">Subscribe</a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li v-on:click="menu=0"><a href="#">Home</a></li>
                                    <li><a href="#">Servivios</a>
                                        <ul class="dropdown">
                                            {{-- <li><a href="index.html">Home</a></li> --}}
                                            <li><a href="#">Restaurante</a></li>
                                            <li><a href="#">Hoteleria</a></li>
                                            <li><a href="">Paquetes</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li v-on:click="menu=2"><a href="#">Galeria</a></li>
                                    <li  v-on:click="menu=3"><a href="#">Blog</a></li>
                                    <li   v-on:click="menu=4"><a href="#">Contactanos</a></li>
                                    <li   v-on:click="menu=5"><a href="#">Inciiar Session</a></li>
                                </ul>

                                <!-- Search Form  -->
                                <div id="search-wrapper">
                                    <form action="#">
                                        <input type="text" id="search" placeholder="Search something...">
                                        <div id="close-icon"></div>
                                        <input class="d-none" type="submit" value="">
                                    </form>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
</nav>

