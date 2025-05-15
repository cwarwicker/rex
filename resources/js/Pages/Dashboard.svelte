<script>
    import { page } from '@inertiajs/svelte';
    const data = {};
    data.user = $page.props.auth.user;
</script>

THIS IS THE DASHBOARD: {data.user.name}