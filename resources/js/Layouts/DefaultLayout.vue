<script setup>
import Logo from '@/Shared/SVG/Logo';
import FacebookIcon from "@/Shared/SVG/FacebookIcon";
import TwitterIcon from "@/Shared/SVG/TwitterIcon";
import InstagramIcon from "@/Shared/SVG/InstagramIcon";

import NavigationItem from '@/Shared/Navigation/NavigationItem';
import MobileNavigationItem from '@/Shared/Navigation/MobileNavigationItem';
import Footer from '@/Shared/Footer/Footer';
import ButtonShape from '@/Shared/ButtonShape';
import { Link } from '@inertiajs/inertia-vue3';

import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { MenuIcon, XIcon, BellIcon } from '@heroicons/vue/outline';

const navigation = [
    { name: 'Home', href: '/', current: true, external: false },
    { name: 'On Sale', href: '/on-sale', current: false, external: false },
    { name: 'Funded', href: '/funded', current: false, external: false },
    { name: 'Upcoming', href: '/upcoming', current: false, external: false },
];
const userNavigation = [
    { name: 'Connect Wallet', href: '#', external: false },
];

let props = defineProps({
    config: Object,
    user: Object,
});
</script>
<template>
    <div
        id="wrapper"
        class="flex min-h-screen w-full flex-col justify-between main-background">
        <div class="mb-6 w-full">
            <Disclosure as="nav" v-slot="{ open }" class="relative z-20">
                <div class="container mx-auto border-b border-white border-opacity-10 ">
                    <div class="flex justify-between h-20">
                        <div class="flex lg:space-x-32">
                            <div class="flex-shrink-0 flex items-center">
                                <Link href="/">
                                    <Logo class="w-32" />
                                </Link>
                            </div>
                            <div class="hidden md:ml-6 md:flex sm:space-x-4 lg:space-x-8">
                                <NavigationItem
                                    :href="link.href"
                                    as="link"
                                    v-for="link in navigation"
                                    :key="link.name"
                                    :current="link.current"
                                >
                                    <span>{{ link.name }}</span>
                                </NavigationItem>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="items-center flex-shrink-0 space-x-4 mr-11 hidden md:flex">
                                <Link href="#">
                                    <FacebookIcon class="text-wgl-gray-1 opacity-70"></FacebookIcon>
                                </Link>
                                <Link href="#">
                                    <InstagramIcon class="text-wgl-gray-1 opacity-70"></InstagramIcon>
                                </Link>
                                <Link href="#">
                                    <TwitterIcon class="text-wgl-gray-1 opacity-70"></TwitterIcon>
                                </Link>
                            </div>
                            <div class="flex-shrink-0 md:mr-4">
                                <Link v-if="!user" href="#">
                                    <ButtonShape type="blue">
                                        <span class="">Connect Wallet</span>
                                    </ButtonShape>
                                </Link>
                            </div>
                            <div class="ml-2 mr-2 flex items-center md:hidden">
                                <!-- Mobile menu button -->
                                <DisclosureButton class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Open main menu</span>
                                    <MenuIcon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
                                    <XIcon v-else class="block h-6 w-6" aria-hidden="true" />
                                </DisclosureButton>
                            </div>
                        </div>
                    </div>
                </div>

                <DisclosurePanel class="md:hidden bg-wgl-black-2 rounded-b-2xl absolute w-full z-20">
                    <div class="pt-4 pb-4 space-y-2">
                        <MobileNavigationItem
                            :href="link.href"
                            as="link"
                            v-for="link in navigation"
                            :key="link.name"
                            :current="link.current"
                        >
                            <span>{{ link.name }}</span>
                        </MobileNavigationItem>
                    </div>
                    <div class="pt-6 pb-6 mx-4 sm:mx-6 border-t border-white border-opacity-10">
                        <div class="flex items-center">
                            <div class="flex items-center flex-shrink-0 space-x-8">
                                <Link href="#">
                                    <FacebookIcon class="text-wgl-gray-1 opacity-70"></FacebookIcon>
                                </Link>
                                <Link href="#">
                                    <InstagramIcon class="text-wgl-gray-1 opacity-70"></InstagramIcon>
                                </Link>
                                <Link href="#">
                                    <TwitterIcon class="text-wgl-gray-1 opacity-70"></TwitterIcon>
                                </Link>
                            </div>
                        </div>
                    </div>
                </DisclosurePanel>
            </Disclosure>
        </div>
        <div
            class="container mx-auto flex h-full flex-1 flex-grow flex-col px-4 lg:mt-0"
        >
            <!--            <transition name="page">-->
            <slot />
            <!--            </transition>-->
        </div>
        <div class="footer-background">
            <div class="container mx-auto mt-8 w-full py-2">
                <Footer />
            </div>
        </div>
    </div>
</template>

<style scoped>
.page-enter-active,
.page-leave-active {
    transition: all 0.3s;
}

.page-enter,
.page-leave-active {
    opacity: 0;
}
</style>
