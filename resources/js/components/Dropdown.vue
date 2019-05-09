<template>
        <div class="dropdown relative" :aria-expanded="isDropdownActive ? 'true' : 'false'" v-on-clickaway="away">
            <button class="text-left leading-normal focus:outline-none" @click="isDropdownActive=!isDropdownActive">
                <slot></slot>
            </button>
              <div class="dropdown-content absolute right-0 mt-2 w-64 bg-white rounded-lg shadow py-2 z-40" v-bind:class="{ 'is-active': isDropdownActive }" role="menu">
                      <slot name="menu"></slot>
              </div>
        </div>
</template>

<script>
import { mixin as clickaway } from 'vue-clickaway';
export default {
    props: ['id'],
    mixins: [ clickaway ],
    data() {
        return {
            isDropdownActive: false,
        }
    },
    methods: {
        away() {
            this.isDropdownActive = false;
            }
        }
    };
</script>