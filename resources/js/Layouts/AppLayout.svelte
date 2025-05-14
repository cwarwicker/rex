<script>
  import { page } from '@inertiajs/svelte';
  const data = {};
  data.url = $page.props.app.url;
  data.name = $page.props.app.name;
  data.user = $page.props.auth.user;
  data.loginRoute = $page.props.route.login;
  data.registerRoute = $page.props.route.register;
  data.logoutRoute = $page.props.route.logout;
  data.csrf = $page.props.app.csrf;
  export let children;

  function handleLogout(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
  }

</script>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{data.url}">{data.name}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto"></ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                {#if !$page.props.auth?.user}
                    <li class="nav-item">
                        <a class="nav-link" href="{data.loginRoute}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{data.registerRoute}">Register</a>
                    </li>
                {:else}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{data.user.name}</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{data.logoutRoute}" on:click={handleLogout}>Logout</a>
                            <form id="logout-form" action="{data.logoutRoute}" method="POST" class="d-none">
                                <input type="hidden" name="_token" value="{data.csrf}" autocomplete="off">
                            </form>
                        </div>
                    </li>
                {/if}
            </ul>
        </div>
    </div>
</nav>

<main><slot/></main>

<footer>Bye</footer>