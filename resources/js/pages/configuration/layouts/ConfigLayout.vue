<template>
    <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li :class="{ 'active': $page.props.menu.sub === 'application' }">
                    <Link :href="$route('config.application')">Application Setting</Link>
                </li>
                <li :class="{ 'active': $page.props.menu.sub === 'app' }">
                    <Link :href="$route('config.interest.index')">Interest Setting</Link>
                </li>
            </ul>
        </div>
    </div>
    <slot/>
</template>

<script>
export default {
    name: 'ConfigLayouts'
}
</script>