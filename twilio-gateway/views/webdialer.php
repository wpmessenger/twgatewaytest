
<div class="max-w-2xl px-4 py-2 border-2 mx-auto">
    <div class="rounded-lg bg-[#c0cbe4]">
        <div class="px-4 py-2">
            <form action="." method="post" id="web_dialer_pad">
                <div id="dialer-form-div" class="flex flex-col gap-4">
                    <select name="tg_twilio_numbers" id="tg_twilio_numbers" class="bg-red-400">
                        <option value="-">Call From </option>
                        <option value="1" class="text-start font-semibold text-lg">My Phone ((925)555-12345</option>
                        <option value="2" class="text-start font-semibold text-lg">Business Phone (415)182-4343</option>
                        <option value="3" class="text-start font-semibold text-lg">Other Phone (510)234-5656</option>
                    </select>
                    <div class="mt-4 flex justify-between">
                        <input type="text" class="text-xl w-11/12" id="tg_dialer_input" placeholder="1(780)217-9868">
                        <button type="button" onclick="enterNumber('r')" class="w-1/12">
                            <svg class="w-8 h-8 float-right" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.28 20.25H17c2.76 0 5-2.24 5-5v-6.5c0-2.76-2.24-5-5-5h-6.72c-1.41 0-2.75.59-3.7 1.64L3.05 9.27a4.053 4.053 0 000 5.46l3.53 3.88a4.978 4.978 0 003.7 1.64z"></path>
                                <path stroke-linecap="round" stroke-width="1.5" d="M16 14.47l-4.94-4.94M11.06 14.47L16 9.53"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <button type="button" onclick="enterNumber(1)" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">1</p>
                                <p class="w-full text-center text-lg font-bold">—––</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="enterNumber(2)" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">2</p>
                                <p class="w-full text-center text-lg font-bold">ABC</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="enterNumber(3)" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">3</p>
                                <p class="w-full text-center text-lg font-bold">DEF</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="enterNumber(4)" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">4</p>
                                <p class="w-full text-center text-lg font-bold">GHI</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="enterNumber(5)" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">5</p>
                                <p class="w-full text-center text-lg font-bold">JKL</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="enterNumber(6)" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">6</p>
                                <p class="w-full text-center text-lg font-bold">MNO</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="enterNumber(7)" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">7</p>
                                <p class="w-full text-center text-lg font-bold">PQRS</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="enterNumber(8)" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">8</p>
                                <p class="w-full text-center text-lg font-bold">TUB</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="enterNumber(9)" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">9</p>
                                <p class="w-full text-center text-lg font-bold">WXYZ</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="enterNumber('*')" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">*</p>
                                <p class="w-full text-center text-lg font-bold">(</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="enterNumber(0)" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">0</p>
                                <p class="w-full text-center text-lg font-bold">+</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="enterNumber('#')" class="text-[#3b86b9] hover:outline-1 hover:outline-dotted outline-[#3b86b9] rounded-lg w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">#</p>
                                <p class="w-full text-center text-lg font-bold">)</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="makeCall()" class="text-[#f3f3f3] hover:outline-1 hover:outline-dotted outline-[#5ca843] bg-[#5ca843] rounded-full w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold"></p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="makeCall()" class="text-[#f3f3f3] hover:outline-1 hover:outline-dotted outline-[#5ca843] bg-[#5ca843] rounded-full w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">Make Call</p>
                            </button>
                        </div>
                        <div>
                            <button type="button" onclick="endCall()" class="text-[#ffffff] hover:outline-1 hover:outline-dotted outline-red-400 bg-red-400 rounded-full w-full flex flex-col">
                                <p class="w-full text-center text-2xl font-extrabold">End Call</p>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var number = '';

    function enterNumber(param) {
        if (param != 'r') {
            number += param;
        }else{
            number = number.slice(0, -1);
        }
        $('input#tg_dialer_input').val(number)
    }
</script>