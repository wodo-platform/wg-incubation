<script setup>
import MultichainIGOsIcon from "@/Shared/SVG/MultichainIGOsIcon";
import MultichainIGOs2Icon from "@/Shared/SVG/MultichainIGOs2Icon";
import EarnRewardsIcon from "@/Shared/SVG/EarnRewardsIcon";
import LogoWhite from "@/Shared/SVG/LogoWhite";
import TextInput from "@/Shared/Inputs/TextInput";
import ButtonShape from "@/Shared/ButtonShape";
</script>

<script>
import FooterLink from '@/Shared/Footer/FooterLink';
export default {
    components: { FooterLink },
};
</script>

<template>
    <div>
        <div class="mt-28 sm:mt-32 mb-20 sm:mb-28 grid grid-cols-1 md:grid-cols-3 gap-y-[18px] gap-x-4">
            <div class="flex flex-row md:flex-col items-center justify-start sm:justify-center space-x-2 md:space-x-0 max-w-[330px] md:m-auto">
                <div class="w-auto">
                    <MultichainIGOsIcon class="w-[78px] md:w-[147px] h-[63px] md:h-full"></MultichainIGOsIcon>
                </div>
                <div class="text-left md:text-center">
                    <h3 class="text-white italic">Multichain IGO’s</h3>
                    <p class="text-white text-xs text-opacity-60">Join IGO’s on mutliple blockchains in a single click</p>
                </div>
            </div>
            <div class="flex flex-row md:flex-col items-center justify-start sm:justify-center space-x-2 md:space-x-0 max-w-[330px] md:m-auto">
                <div class="w-auto">
                    <EarnRewardsIcon class="w-[78px] md:w-[147px] h-[63px] md:h-full"></EarnRewardsIcon>
                </div>
                <div class="text-left md:text-center">
                    <h3 class="text-white italic">Earn rewards</h3>
                    <p class="text-white text-xs text-opacity-60">Support by providing or just stake to get rewards</p>
                </div>
            </div>
            <div class="flex flex-row md:flex-col items-center justify-start sm:justify-center space-x-2 md:space-x-0 max-w-[330px] md:m-auto">
                <div class="w-auto">
                    <MultichainIGOs2Icon class="w-[78px] md:w-[147px] h-[63px] md:h-full"></MultichainIGOs2Icon>
                </div>
                <div class="text-left md:text-center">
                    <h3 class="text-white italic">Multichain IGO’s</h3>
                    <p class="text-white text-xs text-opacity-60">All IGO’s are secured by 300k USDT in case of failure to launch or team misconduct</p>
                </div>
            </div>
        </div>
        <div class="mb-20">
            <LogoWhite class="m-auto"></LogoWhite>
        </div>
        <div>
            <div class="footer-subscribe-box ">
                <div class="p-6 md:px-[50px] md:py-[40px] flex flex-col md:flex-row space-y-7 md:space-y-0 justify-between items-center">
                    <div><p class="text-white text-lg">Sign up for our newsletter and get the latest sales and news.</p></div>
                    <div class="border border-[#705CFF] border-opacity-[0.24] rounded-lg drop-shadow-3xl w-[400px] mx-auto lg:mx-0">
                        <div class="flex justify-between p-1 items-center h-[58px] drop-shadow-none">
                            <div class="w-full">
                                <text-input class="bg-transparent border-none text-white text-opacity-70 placeholder-white placeholder-opacity-30" placeholder="Enter your email"></text-input>
                            </div>
                            <div>
                                <ButtonShape type="blue" class="h-[50px] flex items-center drop-shadow-none">
                                    <span>Subscribe</span>
                                </ButtonShape>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between flex-col md:flex-row mx-4 space-y-6 md:space-y-0 mt-8 py-2">
            <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row md:space-x-6 md:items-center">
                <div class="flex items-center space-x-6">
                    <FooterLink class="text-opacity-60">On sale tokens</FooterLink>
                    <FooterLink class="text-opacity-60">Funded tokens</FooterLink>
                    <FooterLink class="text-opacity-60">upcoming tokens</FooterLink>
                </div>
                <div class="hidden md:block text-white text-[4px] text-opacity-60">●</div>
                <div class="flex items-center space-x-6">
                    <FooterLink class="text-opacity-60">Documentation</FooterLink>
                    <FooterLink class="text-opacity-60">Help</FooterLink>
                </div>
            </div>
            <div>
                <FooterLink>visit wodo.network</FooterLink>
            </div>
        </div>
    </div>
</template>
