<template lang="">
    <nav>
        <ul class="flex space-x-6">
            <li>
                <NavLink href="/" :active="$page.component ==='Home'">
                Home
                </NavLink>
            </li>
            <li>
                <NavLink href="/users" :active="$page.component === 'Users/Index'">
                Users
                </NavLink>
            </li>
            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings/Index'">
                Settings
                </NavLink>
            </li>
        </ul>
    </nav>
</template>
<script>

import NavLink from './NavLink.vue';

export default {
    components: { NavLink },
}
</script>
<style lang="">
    
</style>