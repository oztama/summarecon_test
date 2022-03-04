<!-- bottom panel start -->
<div class="bottom-panel">
    <ul>
        <li class="{{ (Route::current()->getName() == 'home') ? 'active' : '' }}">
            <a href="{{ route('home') }}">
                <div class="icon">
                    <i class="iconly-Home icli"></i>
                    <i class="iconly-Home icbo"></i>
                </div>
                <span>home</span>
            </a>
        </li>
        <li class="{{ (Route::current()->getName() == 'directory') ? 'active' : '' }}">
            <a href="{{ route('directory') }}">
                <div class="icon">
                    <i class="iconly-Folder icli"></i>
                    <i class="iconly-Folder icbo"></i>
                </div>
                <span>directory</span>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="icon">
                    <i class="iconly-Upload icli"></i>
                    <i class="iconly-Upload icbo"></i>
                </div>
                <span>upload</span>
            </a>
        </li>
        <li class="{{ (Route::current()->getName() == 'rewards') ? 'active' : '' }}">
            <a href="{{ route('rewards') }}">
                <div class="icon">
                    <i class="iconly-Discovery icli"></i>
                    <i class="iconly-Discovery icbo"></i>
                </div>
                <span>Rewards</span>
            </a>
        </li>
        <li class="{{ (Route::current()->getName() == 'profile') ? 'active' : '' }}">
            <a href="{{ route('profile') }}">
                <div class="icon">
                    <i class="iconly-Profile icli"></i>
                    <i class="iconly-Profile icbo"></i>
                </div>
                <span>profile</span>
            </a>
        </li>
    </ul>
</div>
<!-- bottom panel end -->
