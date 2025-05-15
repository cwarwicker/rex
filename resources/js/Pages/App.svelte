<script>
import { page } from '@inertiajs/svelte';
import AppLayout from '../Layouts/AppLayout.svelte';
import Dashboard from './Dashboard.svelte';
import Guest from './Guest.svelte';
const data = {};
data.user = $page.props.auth.user;
</script>

<AppLayout>
    {#if $page.props.auth?.user}
        <Dashboard/>
    {:else}
        <Guest/>
    {/if}
</AppLayout>