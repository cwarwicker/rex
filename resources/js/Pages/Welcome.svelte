<script>
import AppLayout from '../Layouts/AppLayout.svelte';
export let user;
</script>

<AppLayout>
    <div class="name"><div class="alert alert-success">Welcome {user}!</div></div>
</AppLayout>