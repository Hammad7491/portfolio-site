<!-- HEADER START -->
<header style="background-color: white; padding: 20px 40px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); z-index: 999; position: relative;">
    <div style="display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 0 auto; gap: 40px;">

        <!-- Logo -->
        <a href="{{ url('/') }}" style="font-size: 28px; font-weight: bold; font-family: Arial, sans-serif; text-decoration: none; white-space: nowrap;">
            <span style="color: orange;">Harris</span><span style="color: #555;"> Digital</span>
        </a>

        <!-- Navigation Menu -->
        <nav style="flex-grow: 1;">
            <ul style="list-style: none; display: flex; justify-content: flex-end; gap: 30px; margin: 0; padding: 0; font-size: 16px; font-family: sans-serif;">
                <li><a href="{{ url('/') }}" style="color: black; text-decoration: none;">Home</a></li>
                <li><a href="{{ url('/packages') }}" style="color: black; text-decoration: none;">Website Packages</a></li>
                <li><a href="{{ url('/portfolio') }}" style="color: black; text-decoration: none;">Portfolio</a></li>
                <li><a href="{{ url('/hosting') }}" style="color: black; text-decoration: none;">Web Hosting</a></li>
                <li><a href="{{ url('/support') }}" style="color: black; text-decoration: none;">Support</a></li>
                <li><a href="{{ url('/contact') }}" style="color: black; text-decoration: none;">Contact Us</a></li>
            </ul>
        </nav>

    </div>
</header>
<!-- HEADER END -->
