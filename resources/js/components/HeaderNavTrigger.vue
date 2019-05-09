<template>
    <div>
        <slot></slot>
    </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            isDropdownActive: false,
        }
    },
    };
</script>
