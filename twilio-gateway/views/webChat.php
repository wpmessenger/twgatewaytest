<!-- ? tg == Twilio Gateway -->


<div class="w-full mx-auto px-2 chat-2 way">
    <div class="two-way-chat-nav justify items-center">
        <div class="chat-buttons">
            <div class="chat-buttons-top">
                <button class="bg-[#2d323e] hover:bg-[#444851] w-44 h-9 rounded-md text-white my-4 pb-1">
                    <span class="text-white text-lg">Compose + </span>
                </button>
                <div>
                    <button class="btn-secondary">Sales Department</button>
                    <button class="btn-secondary">Support Department</button>
                </div>
            </div>
            <div class="chat-buttons-bottom">
                <button id="btn_inbox" class="rounded-r-2xl">Inbox</button>
                <button id="btn_sent" class="rounded-r-2xl">Sent</button>
                <button id="btn_stared" class="rounded-r-2xl">Stared</button>
                <button id="btn_messages" class="rounded-r-2xl">Messages</button>
                <button id="btn_1" class="rounded-r-2xl">Tag Name 1</button>
                <button id="btn_2" class="rounded-r-2xl">Tag Name 2</button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 w-full border-2">
        <div class="col-span-2 border-r-2 flex flex-col justify-start">
            <!-- 
                1. Mail Box // ? Header
                2. Componses // ? Button
                3. Mail Boxes // ? Header
                4. Main Inbox // ? Main Button Slitely bigger than others
                5. Sent, Stared etc // ? Other Buttons under 3. Mail Boxes portion
                6. Sales and Support Department // ? Buttons for other mail boxes
            -->

            <div class="h-24 border-b-2 px-6 mt-2">
                <p class="float-left text-xl font-bold">MailBox</p>
                <button class="bg-[#2d323e] hover:bg-[#444851] w-44 h-9 rounded-md text-white my-4 pb-1">
                    <span class="text-white text-lg">Compose +</span>
                </button>
            </div>

            <div class="flex flex-col px-4 gap-2 justify-left chat-buttons">
                <p class="text-lg fontsemibold mb-2">MAILBOXES</p>
                <button id="btn_inbox" class="rounded-r-2xl">Inbox</button>
                <button id="btn_sent" class="rounded-r-2xl">Sent</button>
                <button id="btn_stared" class="rounded-r-2xl">Stared</button>
                <button id="btn_messages" class="rounded-r-2xl">Messages</button>
                <button id="btn_1" class="rounded-r-2xl">Tag Name 1</button>
                <button id="btn_2" class="rounded-r-2xl">Tag Name 2</button>
                <br>
                <button class="btn-secondary">Sales Department</button>
                <br>
                <button class="btn-secondary">Support Department</button>
            </div>

        </div>
        <div class="col-span-2 flex flex-col justify-start">
            <!-- 
                1. Search Bar // ? Search bar for person or email
                2. Check Box + Arrow down // ? Check box with arrow down icon
                3. ICONS in Buttons // ? Arcive, Info, Delete and many more
                4. User / Group Info // ? User /Group detail in like in whatsapp
                4.1. User / Group Image
                4.2. User / Group Name
            -->

            <div class="h-24 border-b-2 px-2 mt-2 pt-2">
                <div class="relative">
                    <input type="text" name="contact_search" id="contact_search" class="w-full pl-2 pr-10" placeholder="Search Contact / Group">
                    <div class="absolute top-0 right-2">
                        <svg class="w-6 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.55024 10.5503C8.55024 11.1026 8.10253 11.5503 7.55024 11.5503C6.99796 11.5503 6.55024 11.1026 6.55024 10.5503C6.55024 9.99801 6.99796 9.55029 7.55024 9.55029C8.10253 9.55029 8.55024 9.99801 8.55024 10.5503Z" fill="currentColor"></path>
                            <path d="M10.5502 11.5503C11.1025 11.5503 11.5502 11.1026 11.5502 10.5503C11.5502 9.99801 11.1025 9.55029 10.5502 9.55029C9.99796 9.55029 9.55024 9.99801 9.55024 10.5503C9.55024 11.1026 9.99796 11.5503 10.5502 11.5503Z" fill="currentColor"></path>
                            <path d="M13.5502 11.5503C14.1025 11.5503 14.5502 11.1026 14.5502 10.5503C14.5502 9.99801 14.1025 9.55029 13.5502 9.55029C12.998 9.55029 12.5502 9.99801 12.5502 10.5503C12.5502 11.1026 12.998 11.5503 13.5502 11.5503Z" fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2071 4.89344C19.0922 7.7786 19.313 12.3192 16.8693 15.4577C16.8846 15.4712 16.8996 15.4853 16.9142 15.4999L21.1568 19.7426C21.5473 20.1331 21.5473 20.7663 21.1568 21.1568C20.7663 21.5473 20.1331 21.5473 19.7426 21.1568L15.5 16.9141C15.4853 16.8995 15.4713 16.8846 15.4578 16.8693C12.3193 19.3131 7.77858 19.0923 4.89338 16.2071C1.76918 13.083 1.76918 8.01763 4.89338 4.89344C8.01757 1.76924 13.0829 1.76924 16.2071 4.89344ZM6.30759 14.7929C8.65074 17.1361 12.4497 17.1361 14.7929 14.7929C17.136 12.4498 17.136 8.6508 14.7929 6.30765C12.4497 3.96451 8.65074 3.96451 6.30759 6.30765C3.96445 8.6508 3.96445 12.4498 6.30759 14.7929Z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>

                <div class="flex justify-start items-center mt-2 ml-2">
                    <input type="checkbox" name="tick_all_contact" id="tick_all_contact">
                    <svg class="w-6 h-6 m-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M12 16l-6-6h12z"></path>
                        </g>
                    </svg>
                </div>
            </div>

            <div class="flex flex-col px-1 justify-left contact-scroll-overflow">
                <div class="user_contact" onclick="_messages_box(1)">
                    <div class="discussion wpmp_left_panel_phone" data-phone="+15005550006">
                        <input type="checkbox" name="tick_contact" id="tick_contact">
                        <div class="photo" style="background-image: url();"></div>
                        <div class="desc-contact">
                            <p class="name">+15005550006</p>
                            <strong><small class="subject">Subject of the latest message.</small></strong>
                        </div>
                        <div class="icon_time">
                            <div class="time"><strong>25 Jan</strong></div>
                            <div class="icon flex justify-end gap-2">
                                <svg class="attachment w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M14 13.5V8a4 4 0 1 0-8 0v5.5a6.5 6.5 0 1 0 13 0V4h2v9.5a8.5 8.5 0 1 1-17 0V8a6 6 0 1 1 12 0v5.5a3.5 3.5 0 0 1-7 0V8h2v5.5a1.5 1.5 0 0 0 3 0z"></path>
                                    </g>
                                </svg>
                                <svg class="start w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <small class="message">latest message information</small>
                </div>
            </div>

        </div>
        <div class="col-span-6 border-l-2 messages-box">
            <div class="h-24 border-b-2 px-6 mt-2">
                <div class="user_contact">
                    <div class="discussion wpmp_left_panel_phone px-2">
                        <button class="cross2" onclick="_messages_box(2)">X</button>
                        <div class="flex gap-2 items-center">
                            <div class="photo" style="background-image: url();"></div>
                            <div class="desc-contact">
                                <p class="name">+15005550006</p>
                                <strong><small class="subject">user's slogan.</small></strong>
                            </div>
                        </div>
                        <div class="icon_time">
                            <div class="time"><strong>25 Jan</strong></div>
                            <div class="icon flex justify-end gap-2">
                                <svg class="attachment w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M14 13.5V8a4 4 0 1 0-8 0v5.5a6.5 6.5 0 1 0 13 0V4h2v9.5a8.5 8.5 0 1 1-17 0V8a6 6 0 1 1 12 0v5.5a3.5 3.5 0 0 1-7 0V8h2v5.5a1.5 1.5 0 0 0 3 0z"></path>
                                    </g>
                                </svg>
                                <svg class="start w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                </svg>
                            </div>
                        </div>
                        <button class="hamburger_dots" onclick="_contact_user_info(1)">
                            <svg class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col px-1 justify-left chat-scroll-overflow">
                <div class="container">
                    <div class="grid-item py-2 gap-2 messages-chat">
                        <div class="w-full flex chat-msg justify-end">
                            <div class="max-w-[80%] min-w-[150px] w-fit message-outgoing message rounded-lg message-content bg-[#d9fdd3]">
                                <div class="msg-cont">hey</div>
                                <small class="flex text-xs">
                                    <span class="msg-time">2023-01-12 03:45:30</span>
                                    <span class="msg-status text-blue-600">
                                        <svg viewBox="0 0 16 11" height="11" width="16" preserveAspectRatio="xMidYMid meet" class="" fill="none">
                                            <path d="M11.0714 0.652832C10.991 0.585124 10.8894 0.55127 10.7667 0.55127C10.6186 0.55127 10.4916 0.610514 10.3858 0.729004L4.19688 8.36523L1.79112 6.09277C1.7488 6.04622 1.69802 6.01025 1.63877 5.98486C1.57953 5.95947 1.51817 5.94678 1.45469 5.94678C1.32351 5.94678 1.20925 5.99544 1.11192 6.09277L0.800883 6.40381C0.707784 6.49268 0.661235 6.60482 0.661235 6.74023C0.661235 6.87565 0.707784 6.98991 0.800883 7.08301L3.79698 10.0791C3.94509 10.2145 4.11224 10.2822 4.29844 10.2822C4.40424 10.2822 4.5058 10.259 4.60313 10.2124C4.70046 10.1659 4.78086 10.1003 4.84434 10.0156L11.4903 1.59863C11.5623 1.5013 11.5982 1.40186 11.5982 1.30029C11.5982 1.14372 11.5348 1.01888 11.4078 0.925781L11.0714 0.652832ZM8.6212 8.32715C8.43077 8.20866 8.2488 8.09017 8.0753 7.97168C7.99489 7.89128 7.8891 7.85107 7.75791 7.85107C7.6098 7.85107 7.4892 7.90397 7.3961 8.00977L7.10411 8.33984C7.01947 8.43717 6.97715 8.54508 6.97715 8.66357C6.97715 8.79476 7.0237 8.90902 7.1168 9.00635L8.1959 10.0791C8.33132 10.2145 8.49636 10.2822 8.69102 10.2822C8.79681 10.2822 8.89838 10.259 8.99571 10.2124C9.09304 10.1659 9.17556 10.1003 9.24327 10.0156L15.8639 1.62402C15.9358 1.53939 15.9718 1.43994 15.9718 1.32568C15.9718 1.1818 15.9125 1.05697 15.794 0.951172L15.4386 0.678223C15.3582 0.610514 15.2587 0.57666 15.1402 0.57666C14.9964 0.57666 14.8715 0.635905 14.7657 0.754395L8.6212 8.32715Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </small>
                            </div>
                        </div>
                        <div class="w-full flex chat-msg">
                            <div class="max-w-[80%] min-w-[150px] w-fit message-incoming message rounded-lg message-content bg-[#fff]">
                                <p class="msg-cont ml-1">What\'s up? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum quo necessitatibus officia illo repellendus reiciendis maiores et asperiores blanditiis aliquam eaque, molestias exercitationem quia minima quod magni vero cumque deleniti!
                                    Dicta, ipsa, aperiam iste inventore esse error, in fuga nam commodi odit eum voluptatum repellendus facilis repudiandae saepe a voluptatem et. Labore non sit totam consequatur, nihil sint accusamus dolorem.
                                    Fugit consectetur numquam ea totam suscipit unde ut neque. Alias error sunt totam cumque quasi consequuntur nemo dicta commodi magni. Impedit optio corrupti quasi voluptatum delectus, distinctio odio minus laudantium.
                                    Cum odio beatae amet error unde consequatur ex sequi tempora dolores facere? Qui ipsa, vel ad, eos iste ut consectetur facilis, tenetur laboriosam distinctio placeat adipisci quam magnam voluptates tempore.
                                    Dignissimos fuga quam ullam repudiandae odit incidunt corporis saepe, accusamus quia reprehenderit eveniet dolor odio labore cumque, velit architecto mollitia tenetur nisi quod nobis magni sunt porro maxime atque. Beatae.
                                    Ipsa dolorum autem veritatis. Vel nesciunt magni odio minima eius nam aut soluta et voluptas labore quae id sequi non saepe qui, esse consequatur quos a quidem deserunt reprehenderit. Error?
                                    Praesentium possimus error corrupti explicabo mollitia pariatur amet tempore unde in ullam impedit, dignissimos modi excepturi officiis eligendi. Commodi architecto suscipit, voluptatum blanditiis vel numquam dicta dolorum provident nesciunt odio?
                                    Dolore labore quia cumque ut at et iure quisquam laboriosam, sequi quibusdam consequatur suscipit rerum numquam rem delectus commodi ratione. Vero ex quibusdam eveniet veritatis? Tenetur beatae repellat numquam dolores.
                                    Consequuntur ducimus obcaecati quidem natus corporis. Accusantium rerum dolore ratione beatae ea, qui dolores cum libero, aliquam eaque soluta eligendi distinctio! Nulla veritatis, tenetur ipsam blanditiis fugiat debitis rerum autem.
                                    Cum accusamus odit nam officia, ipsam dolore expedita doloribus est inventore perspiciatis, labore quod blanditiis deserunt, tenetur aliquid unde provident corporis enim libero ratione qui eaque. Perferendis nihil provident quis!
                                    Quia perspiciatis aliquid assumenda tenetur libero fugiat debitis dolor accusamus, eligendi similique corrupti. Doloribus impedit beatae praesentium quibusdam maiores sint veritatis sit ullam, perferendis autem possimus quo quidem iusto nobis?
                                    Temporibus suscipit assumenda consequatur maiores eligendi ab, inventore fuga veniam voluptatum eos deleniti iste ad itaque blanditiis nam, quas corrupti. Iste dolore tenetur labore voluptate veniam fugiat modi voluptas cum.
                                    Laudantium cupiditate voluptatum qui deleniti? Pariatur eaque incidunt dolore facere mollitia eius in similique, accusantium ratione quo hic dolorum accusamus magnam error dolorem est officiis excepturi voluptatem nam! Velit, rem.
                                    Reiciendis magni minima nihil ex eveniet dolores corporis adipisci fuga voluptates aliquam a distinctio non sapiente incidunt amet velit eligendi suscipit eos repellat ipsa id, quia ea voluptatem vero! Iusto.
                                    Cum, laborum nisi voluptatum tenetur, natus reiciendis, aperiam fuga voluptas repellat exercitationem quasi unde saepe? Officia, odio. Possimus blanditiis optio, recusandae perspiciatis aliquam fugiat dolores aspernatur reprehenderit commodi nobis odio.
                                    Non, perspiciatis! Rem laboriosam repellendus voluptates et amet quae ipsum possimus, ad in fuga veritatis veniam quisquam sequi voluptas aliquam mollitia, provident iusto asperiores quidem molestias nisi labore corporis! Ratione!
                                    Obcaecati quae eius rerum velit! Recusandae a, vel cum eum mollitia officiis dolorem minus numquam pariatur exercitationem. Molestiae voluptates illum quae dolorum voluptatum cupiditate ad necessitatibus a, quibusdam blanditiis sint!
                                    Itaque consectetur, magnam id, voluptas fuga eaque voluptate ducimus sint quas placeat quidem odit, dolore voluptates ipsam corporis distinctio iusto reiciendis mollitia dignissimos totam illo? Voluptates necessitatibus libero cupiditate enim.
                                    Ut suscipit molestiae fugiat dolorem at velit ullam asperiores similique maiores. Ea quasi aut nemo dolores ratione aliquam, id nobis vero enim adipisci obcaecati architecto omnis temporibus ullam ipsa tenetur?
                                    Provident illo error ut consectetur exercitationem quidem voluptate eaque dolor adipisci nobis, modi esse, aliquam harum vel impedit repellendus quaerat aut odit a! Amet in beatae quaerat provident placeat velit.
                                    Eos dolor nisi fugit cum tempore fuga. Nihil numquam nemo nobis sint facere dolore molestiae eos, deleniti, cum voluptatibus obcaecati perferendis quae temporibus fugiat a dicta quod repellat, nostrum ipsam!
                                    Ea est dolores commodi non architecto doloremque consequuntur impedit corrupti, ullam cum nemo inventore fugit vero excepturi porro delectus! Accusamus, nostrum voluptate vel reiciendis fugiat harum natus sed? Exercitationem, excepturi.
                                    Culpa est suscipit eveniet temporibus ullam officiis sunt obcaecati minima esse pariatur illo eum repudiandae itaque reiciendis sed possimus ipsam tempora quibusdam, rerum iste corporis aut. Rerum modi libero quam.
                                    Tempora quam vel repudiandae doloremque sapiente vitae! Similique, eius veniam molestias facilis consequuntur dolore nulla cupiditate ratione labore aliquid! Harum quae similique explicabo magnam maiores voluptatum ad optio saepe officia.
                                    Magnam dolor, reiciendis minima error ratione cumque deleniti quas nemo iure culpa temporibus, est doloremque ut amet laudantium eligendi. Ducimus blanditiis consectetur facilis natus deserunt aut ipsa ratione. Excepturi, labore.
                                    Eos quis illo praesentium non rem nulla cumque id hic quam. Similique non in iure minima eveniet sit esse cumque exercitationem tempora, saepe quis et! Quam deleniti quisquam corrupti accusamus.
                                    Facilis delectus nihil ut tempora nam, numquam vero fugiat laboriosam error doloremque omnis excepturi possimus cumque laudantium a quo illum cupiditate? Dignissimos laboriosam non nisi tempora minima assumenda. Sequi, commodi.
                                    Fuga consequuntur minima eius aut commodi. Exercitationem, adipisci cum explicabo harum perferendis molestias neque cumque deleniti molestiae nobis praesentium nisi delectus eius veritatis placeat voluptas libero, aperiam voluptatum illum dolor.
                                    Sit reiciendis voluptatem aliquam facere ratione molestias eius, voluptas sapiente delectus distinctio quasi tenetur cum quae magni? Nulla illum, dolorum quos blanditiis, voluptatem esse nam, architecto sed sit dolorem quaerat.
                                    Sed, neque. Expedita rem nulla vel numquam assumenda cumque enim cupiditate repellendus laudantium minima officiis, optio sint ad beatae debitis! Optio pariatur nemo voluptatem ex tempore in quaerat, ad est!
                                    Soluta, quasi esse sit quam totam assumenda sequi laudantium voluptates necessitatibus sapiente, temporibus omnis ad numquam facilis aut officia est mollitia possimus aliquam debitis neque et hic. Aliquid, omnis debitis!
                                    Possimus quos quasi eligendi magni sapiente fugiat, neque beatae inventore, eos ad voluptatem itaque quam similique soluta sunt aspernatur nemo unde hic veritatis quod natus. Rerum culpa magnam omnis optio?
                                    Quis earum sequi repellat voluptatum, fugit blanditiis dolorum eius enim. Eius, dignissimos facere magnam rem eos ut possimus debitis voluptas fugit laboriosam soluta necessitatibus quasi quis aut autem iste alias?
                                    Quidem nihil doloremque quis, voluptatem sapiente dolor a quos, animi omnis assumenda quia doloribus totam neque commodi ullam deserunt quo, accusantium mollitia dicta? Enim id mollitia at accusamus expedita atque.
                                    Dolores distinctio, rem dicta rerum mollitia impedit quo adipisci debitis asperiores? Illum soluta id aspernatur quos ipsa incidunt expedita, rem maxime inventore commodi, dolorum vitae sit labore tempore aliquid officiis!
                                    Dolorum nulla incidunt consequatur voluptate! Natus vitae quo, atque ad vero a iure voluptatum hic explicabo minus inventore dolore eaque molestiae architecto sed beatae ut consequatur quod similique. Vitae, ut!
                                    Cupiditate harum pariatur provident rerum vel quae facilis distinctio corrupti laboriosam totam voluptatem repellendus accusantium dignissimos, aperiam, dolorem deserunt earum id doloribus dolores! A sapiente asperiores corrupti quas dolores unde.
                                    Ratione expedita corrupti rem delectus magnam eaque sequi odio, cum aut, nihil inventore quibusdam veniam tenetur rerum natus, quaerat temporibus eveniet qui dicta in. Sunt doloribus magnam aliquam quod maxime.
                                    Nisi, iure velit cupiditate, nesciunt blanditiis eligendi est eius quo, mollitia reprehenderit recusandae inventore? Non earum quidem quisquam aliquid similique repudiandae, tenetur, consequatur ullam saepe ex iusto distinctio obcaecati inventore.
                                    Deleniti distinctio ratione sequi quaerat animi dicta! Earum commodi ex incidunt mollitia aliquam necessitatibus delectus, non minus provident dolorem laboriosam suscipit dicta amet impedit, facere, quis temporibus? Molestiae, omnis! Repellendus.
                                    Ducimus, consequuntur voluptatem ipsa mollitia corporis modi, dolore non, eveniet nostrum soluta eos reprehenderit fuga dolorem quisquam omnis. Deleniti dolorem tenetur aliquam molestiae voluptates dolorum numquam. Ad rem sint dolorem.
                                    Quidem ab, sit voluptatem magnam quae hic accusamus. Praesentium tempora architecto eligendi corrupti dolorum tempore! Doloribus voluptatibus laborum magnam excepturi perspiciatis aperiam commodi, eveniet, et accusamus nemo, dignissimos cumque consequatur!
                                    Amet provident ratione necessitatibus dicta corrupti fuga debitis nesciunt? Soluta quas aspernatur non. Ad possimus nulla aspernatur minima modi voluptate, magnam molestiae praesentium, vero tempore culpa exercitationem! Nesciunt, sunt esse.
                                    Obcaecati ipsa quisquam praesentium tempore voluptatum deserunt nam doloribus, veritatis modi magnam corporis facere beatae illo vero assumenda odio ipsam fugiat esse, officiis aliquam? Aliquid expedita aut soluta natus beatae!
                                    Natus nemo atque odio modi incidunt reprehenderit doloremque officia autem repellendus, eum non culpa hic provident, ut consectetur quam voluptatibus, a ipsa aperiam! Vel, maxime! Asperiores cum molestiae ipsam doloribus?
                                    Deleniti, nihil, quod enim perspiciatis obcaecati expedita minima, maxime fugit rerum ex corrupti velit. Quidem doloremque, deleniti debitis quae deserunt unde tenetur quam, velit, itaque dolorem illum ad. Aliquam, unde.
                                    Inventore enim impedit quia, perferendis porro placeat dolores explicabo debitis quae soluta optio libero veritatis, neque, atque iste ut magni praesentium beatae. Cum, reiciendis vero nesciunt alias animi esse neque?
                                    Quis, reiciendis ut error nemo consectetur aperiam temporibus inventore modi natus unde eius nostrum? Quas explicabo omnis aut hic maxime? Mollitia doloremque earum nisi vel itaque? Voluptatum molestias mollitia quibusdam.
                                    Debitis dolorum numquam perspiciatis odit eveniet omnis labore velit fuga sit sed corrupti eum, itaque ratione minima facilis, aliquam nemo tempore atque amet dignissimos! Explicabo repudiandae maiores tempore adipisci minima?
                                    Ex adipisci distinctio nam. Nesciunt, recusandae maxime. Dolore est inventore quas, ab praesentium iusto perspiciatis eos, dignissimos numquam beatae molestiae ad dolor dicta minus nemo porro repudiandae? Maxime, earum praesentium.</p>
                                <small class="flex text-xs">
                                    <span class="msg-time">2023-01-14 03:44:46</span>
                                    <span class="msg-status hidden">
                                        <svg viewBox="0 0 16 11" height="11" width="16" preserveAspectRatio="xMidYMid meet" class="" fill="none">
                                            <path d="M11.0714 0.652832C10.991 0.585124 10.8894 0.55127 10.7667 0.55127C10.6186 0.55127 10.4916 0.610514 10.3858 0.729004L4.19688 8.36523L1.79112 6.09277C1.7488 6.04622 1.69802 6.01025 1.63877 5.98486C1.57953 5.95947 1.51817 5.94678 1.45469 5.94678C1.32351 5.94678 1.20925 5.99544 1.11192 6.09277L0.800883 6.40381C0.707784 6.49268 0.661235 6.60482 0.661235 6.74023C0.661235 6.87565 0.707784 6.98991 0.800883 7.08301L3.79698 10.0791C3.94509 10.2145 4.11224 10.2822 4.29844 10.2822C4.40424 10.2822 4.5058 10.259 4.60313 10.2124C4.70046 10.1659 4.78086 10.1003 4.84434 10.0156L11.4903 1.59863C11.5623 1.5013 11.5982 1.40186 11.5982 1.30029C11.5982 1.14372 11.5348 1.01888 11.4078 0.925781L11.0714 0.652832ZM8.6212 8.32715C8.43077 8.20866 8.2488 8.09017 8.0753 7.97168C7.99489 7.89128 7.8891 7.85107 7.75791 7.85107C7.6098 7.85107 7.4892 7.90397 7.3961 8.00977L7.10411 8.33984C7.01947 8.43717 6.97715 8.54508 6.97715 8.66357C6.97715 8.79476 7.0237 8.90902 7.1168 9.00635L8.1959 10.0791C8.33132 10.2145 8.49636 10.2822 8.69102 10.2822C8.79681 10.2822 8.89838 10.259 8.99571 10.2124C9.09304 10.1659 9.17556 10.1003 9.24327 10.0156L15.8639 1.62402C15.9358 1.53939 15.9718 1.43994 15.9718 1.32568C15.9718 1.1818 15.9125 1.05697 15.794 0.951172L15.4386 0.678223C15.3582 0.610514 15.2587 0.57666 15.1402 0.57666C14.9964 0.57666 14.8715 0.635905 14.7657 0.754395L8.6212 8.32715Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item footer-chat">
                        <form action="#" method="post" id="wpmp_chat_form" class="w-full h-full flex items-center gap-6">
                            <!-- below code replaced this <i class="icon fa fa-smile-o clickable" style="font-size:25pt;" aria-hidden="true"></i> -->
                            <span class="ml-3">
                                <svg viewBox="0 0 24 24" height="24" width="24" preserveAspectRatio="xMidYMid meet" class="ekdr8vow dhq51u3o" version="1.1" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <path fill="currentColor" d="M9.153,11.603c0.795,0,1.439-0.879,1.439-1.962S9.948,7.679,9.153,7.679 S7.714,8.558,7.714,9.641S8.358,11.603,9.153,11.603z M5.949,12.965c-0.026-0.307-0.131,5.218,6.063,5.551 c6.066-0.25,6.066-5.551,6.066-5.551C12,14.381,5.949,12.965,5.949,12.965z M17.312,14.073c0,0-0.669,1.959-5.051,1.959 c-3.505,0-5.388-1.164-5.607-1.959C6.654,14.073,12.566,15.128,17.312,14.073z M11.804,1.011c-6.195,0-10.826,5.022-10.826,11.217 s4.826,10.761,11.021,10.761S23.02,18.423,23.02,12.228C23.021,6.033,17.999,1.011,11.804,1.011z M12,21.354 c-5.273,0-9.381-3.886-9.381-9.159s3.942-9.548,9.215-9.548s9.548,4.275,9.548,9.548C21.381,17.467,17.273,21.354,12,21.354z  M15.108,11.603c0.795,0,1.439-0.879,1.439-1.962s-0.644-1.962-1.439-1.962s-1.439,0.879-1.439,1.962S14.313,11.603,15.108,11.603z">
                                    </path>
                                </svg>
                            </span>

                            <input type="hidden" value="5" id="wpmp_channel_id">
                            <input type="hidden" value="+19252061806" id="wpmp_phone_to_right">
                            <input type="hidden" value="6" id="wpmp_phones_count">
                            <input type="hidden" value="119" id="wpmp_phone_last_msg_id">
                            <input type="hidden" value="81" id="wpmp_phone_last_phone_id">
                            <input type="text" name="wpmp_msg" id="wpmp_msg" class="write-message w-full rounded-lg py-2 px-4 m-0" placeholder="Type your message here">

                            <!-- below code replaced this <i class="icon send fa fa-paper-plane-o clickable " aria-hidden="true" onclick1='jQuery("#wpmp_chat_form").submit()' id='wpmp_send'></i> -->
                            <!-- <span onclick='jQuery("#wpmp_chat_form").submit()'> -->
                            <span id="wpmp_send" class="cursor-pointer hover:text-gray-500">
                                <svg viewBox="0 0 24 24" height="24" width="24" preserveAspectRatio="xMidYMid meet" class="" version="1.1" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <path fill="currentColor" d="M1.101,21.757L23.8,12.028L1.101,2.3l0.011,7.912l13.623,1.816L1.112,13.845 L1.101,21.757z">
                                    </path>
                                </svg>
                            </span>
                            <p>
                                <span id="wpmp_form_error_right"></span>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2 border-rounded border-l-2 contact-user-info">
            <button class="cross" onclick="_contact_user_info(2)">X</button>
            <div class="flex flex-col w-full h-full gap-4 mx-auto">
                <div class="user-img photo" style="background-image: url();"></div>
                <div class="user-personal-info mx-auto grid grid-cols-2">
                    <p class="no col-span-1">+91012312312</p>
                    <p class="name col-span-1">Two Way Chat</p>
                    <p class="name col-span-2">twoWay@chat.com</p>
                    <p class="company col-span-2">Twilio Gateway</p>
                </div>
                <div class="mx-auto flex flex-col gap-4">
                    <div class="pinned-msgs">
                        <div class="flex justify-between">
                            <p class="text-lg font-semibold">Pinned Messages</p>
                            <a href="#">View All</a>
                        </div>
                        <div class="grid-item gap-2 py-2 messages-chat max-h-52">
                            <div class="w-full flex chat-msg justify-end">
                                <div class="max-w-[90%] min-w-[150px] w-fit message-outgoing message rounded-lg message-content bg-[#d9fdd3]">
                                    <p class="msg-cont">hey</p>
                                    <small class="flex text-xs">
                                        <span class="msg-time">2023-01-14 03:44:34</span>
                                        <span class="msg-status text-blue-600">
                                            <svg viewBox="0 0 16 11" height="11" width="16" preserveAspectRatio="xMidYMid meet" class="" fill="none">
                                                <path d="M11.0714 0.652832C10.991 0.585124 10.8894 0.55127 10.7667 0.55127C10.6186 0.55127 10.4916 0.610514 10.3858 0.729004L4.19688 8.36523L1.79112 6.09277C1.7488 6.04622 1.69802 6.01025 1.63877 5.98486C1.57953 5.95947 1.51817 5.94678 1.45469 5.94678C1.32351 5.94678 1.20925 5.99544 1.11192 6.09277L0.800883 6.40381C0.707784 6.49268 0.661235 6.60482 0.661235 6.74023C0.661235 6.87565 0.707784 6.98991 0.800883 7.08301L3.79698 10.0791C3.94509 10.2145 4.11224 10.2822 4.29844 10.2822C4.40424 10.2822 4.5058 10.259 4.60313 10.2124C4.70046 10.1659 4.78086 10.1003 4.84434 10.0156L11.4903 1.59863C11.5623 1.5013 11.5982 1.40186 11.5982 1.30029C11.5982 1.14372 11.5348 1.01888 11.4078 0.925781L11.0714 0.652832ZM8.6212 8.32715C8.43077 8.20866 8.2488 8.09017 8.0753 7.97168C7.99489 7.89128 7.8891 7.85107 7.75791 7.85107C7.6098 7.85107 7.4892 7.90397 7.3961 8.00977L7.10411 8.33984C7.01947 8.43717 6.97715 8.54508 6.97715 8.66357C6.97715 8.79476 7.0237 8.90902 7.1168 9.00635L8.1959 10.0791C8.33132 10.2145 8.49636 10.2822 8.69102 10.2822C8.79681 10.2822 8.89838 10.259 8.99571 10.2124C9.09304 10.1659 9.17556 10.1003 9.24327 10.0156L15.8639 1.62402C15.9358 1.53939 15.9718 1.43994 15.9718 1.32568C15.9718 1.1818 15.9125 1.05697 15.794 0.951172L15.4386 0.678223C15.3582 0.610514 15.2587 0.57666 15.1402 0.57666C14.9964 0.57666 14.8715 0.635905 14.7657 0.754395L8.6212 8.32715Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </small>
                                </div>
                            </div>
                            <div class="w-full flex chat-msg">
                                <div class="max-w-[90%] min-w-[150px] w-fit message-incoming message rounded-lg message-content bg-[#fff]">
                                    <p class="msg-cont ml-1">What\'s up? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum quo necessitatibus officia illo repellendus reiciendis maiores et asperiores blanditiis aliquam eaque, molestias exercitationem quia minima quod magni vero cumque deleniti!
                                        Dicta, ipsa, aperiam iste inventore esse error, in fuga nam commodi odit eum voluptatum repellendus facilis repudiandae saepe a voluptatem et. Labore non sit totam consequatur, nihil sint accusamus dolorem.
                                        Fugit consectetur numquam ea totam suscipit unde ut neque. Alias error sunt totam cumque quasi consequuntur nemo dicta commodi magni. Impedit optio corrupti quasi voluptatum delectus, distinctio odio minus laudantium.
                                        Cum odio beatae amet error unde consequatur ex sequi tempora dolores facere? Qui ipsa, vel ad, eos iste ut consectetur facilis, tenetur laboriosam distinctio placeat adipisci quam magnam voluptates tempore.
                                        Dignissimos fuga quam ullam repudiandae odit incidunt corporis saepe, accusamus quia reprehenderit eveniet dolor odio labore cumque, velit architecto mollitia tenetur nisi quod nobis magni sunt porro maxime atque. Beatae.
                                        Ipsa dolorum autem veritatis. Vel nesciunt magni odio minima eius nam aut soluta et voluptas labore quae id sequi non saepe qui, esse consequatur quos a quidem deserunt reprehenderit. Error?
                                        Praesentium possimus error corrupti explicabo mollitia pariatur amet tempore unde in ullam impedit, dignissimos modi excepturi officiis eligendi. Commodi architecto suscipit, voluptatum blanditiis vel numquam dicta dolorum provident nesciunt odio?
                                        Dolore labore quia cumque ut at et iure quisquam laboriosam, sequi quibusdam consequatur suscipit rerum numquam rem delectus commodi ratione. Vero ex quibusdam eveniet veritatis? Tenetur beatae repellat numquam dolores.
                                        Consequuntur ducimus obcaecati quidem natus corporis. Accusantium rerum dolore ratione beatae ea, qui dolores cum libero, aliquam eaque soluta eligendi distinctio! Nulla veritatis, tenetur ipsam blanditiis fugiat debitis rerum autem.
                                        Cum accusamus odit nam officia, ipsam dolore expedita doloribus est inventore perspiciatis, labore quod blanditiis deserunt, tenetur aliquid unde provident corporis enim libero ratione qui eaque. Perferendis nihil provident quis!
                                        Quia perspiciatis aliquid assumenda tenetur libero fugiat debitis dolor accusamus, eligendi similique corrupti. Doloribus impedit beatae praesentium quibusdam maiores sint veritatis sit ullam, perferendis autem possimus quo quidem iusto nobis?
                                        Temporibus suscipit assumenda consequatur maiores eligendi ab, inventore fuga veniam voluptatum eos deleniti iste ad itaque blanditiis nam, quas corrupti. Iste dolore tenetur labore voluptate veniam fugiat modi voluptas cum.
                                        Laudantium cupiditate voluptatum qui deleniti? Pariatur eaque incidunt dolore facere mollitia eius in similique, accusantium ratione quo hic dolorum accusamus magnam error dolorem est officiis excepturi voluptatem nam! Velit, rem.
                                        Reiciendis magni minima nihil ex eveniet dolores corporis adipisci fuga voluptates aliquam a distinctio non sapiente incidunt amet velit eligendi suscipit eos repellat ipsa id, quia ea voluptatem vero! Iusto.
                                        Cum, laborum nisi voluptatum tenetur, natus reiciendis, aperiam fuga voluptas repellat exercitationem quasi unde saepe? Officia, odio. Possimus blanditiis optio, recusandae perspiciatis aliquam fugiat dolores aspernatur reprehenderit commodi nobis odio.
                                        Non, perspiciatis! Rem laboriosam repellendus voluptates et amet quae ipsum possimus, ad in fuga veritatis veniam quisquam sequi voluptas aliquam mollitia, provident iusto asperiores quidem molestias nisi labore corporis! Ratione!
                                        Obcaecati quae eius rerum velit! Recusandae a, vel cum eum mollitia officiis dolorem minus numquam pariatur exercitationem. Molestiae voluptates illum quae dolorum voluptatum cupiditate ad necessitatibus a, quibusdam blanditiis sint!
                                        Itaque consectetur, magnam id, voluptas fuga eaque voluptate ducimus sint quas placeat quidem odit, dolore voluptates ipsam corporis distinctio iusto reiciendis mollitia dignissimos totam illo? Voluptates necessitatibus libero cupiditate enim.
                                        Ut suscipit molestiae fugiat dolorem at velit ullam asperiores similique maiores. Ea quasi aut nemo dolores ratione aliquam, id nobis vero enim adipisci obcaecati architecto omnis temporibus ullam ipsa tenetur?
                                        Provident illo error ut consectetur exercitationem quidem voluptate eaque dolor adipisci nobis, modi esse, aliquam harum vel impedit repellendus quaerat aut odit a! Amet in beatae quaerat provident placeat velit.
                                        Eos dolor nisi fugit cum tempore fuga. Nihil numquam nemo nobis sint facere dolore molestiae eos, deleniti, cum voluptatibus obcaecati perferendis quae temporibus fugiat a dicta quod repellat, nostrum ipsam!
                                        Ea est dolores commodi non architecto doloremque consequuntur impedit corrupti, ullam cum nemo inventore fugit vero excepturi porro delectus! Accusamus, nostrum voluptate vel reiciendis fugiat harum natus sed? Exercitationem, excepturi.
                                        Culpa est suscipit eveniet temporibus ullam officiis sunt obcaecati minima esse pariatur illo eum repudiandae itaque reiciendis sed possimus ipsam tempora quibusdam, rerum iste corporis aut. Rerum modi libero quam.
                                        Tempora quam vel repudiandae doloremque sapiente vitae! Similique, eius veniam molestias facilis consequuntur dolore nulla cupiditate ratione labore aliquid! Harum quae similique explicabo magnam maiores voluptatum ad optio saepe officia.
                                        Magnam dolor, reiciendis minima error ratione cumque deleniti quas nemo iure culpa temporibus, est doloremque ut amet laudantium eligendi. Ducimus blanditiis consectetur facilis natus deserunt aut ipsa ratione. Excepturi, labore.
                                        Eos quis illo praesentium non rem nulla cumque id hic quam. Similique non in iure minima eveniet sit esse cumque exercitationem tempora, saepe quis et! Quam deleniti quisquam corrupti accusamus.
                                        Facilis delectus nihil ut tempora nam, numquam vero fugiat laboriosam error doloremque omnis excepturi possimus cumque laudantium a quo illum cupiditate? Dignissimos laboriosam non nisi tempora minima assumenda. Sequi, commodi.
                                        Fuga consequuntur minima eius aut commodi. Exercitationem, adipisci cum explicabo harum perferendis molestias neque cumque deleniti molestiae nobis praesentium nisi delectus eius veritatis placeat voluptas libero, aperiam voluptatum illum dolor.
                                        Sit reiciendis voluptatem aliquam facere ratione molestias eius, voluptas sapiente delectus distinctio quasi tenetur cum quae magni? Nulla illum, dolorum quos blanditiis, voluptatem esse nam, architecto sed sit dolorem quaerat.
                                        Sed, neque. Expedita rem nulla vel numquam assumenda cumque enim cupiditate repellendus laudantium minima officiis, optio sint ad beatae debitis! Optio pariatur nemo voluptatem ex tempore in quaerat, ad est!
                                        Soluta, quasi esse sit quam totam assumenda sequi laudantium voluptates necessitatibus sapiente, temporibus omnis ad numquam facilis aut officia est mollitia possimus aliquam debitis neque et hic. Aliquid, omnis debitis!
                                        Possimus quos quasi eligendi magni sapiente fugiat, neque beatae inventore, eos ad voluptatem itaque quam similique soluta sunt aspernatur nemo unde hic veritatis quod natus. Rerum culpa magnam omnis optio?
                                        Quis earum sequi repellat voluptatum, fugit blanditiis dolorum eius enim. Eius, dignissimos facere magnam rem eos ut possimus debitis voluptas fugit laboriosam soluta necessitatibus quasi quis aut autem iste alias?
                                        Quidem nihil doloremque quis, voluptatem sapiente dolor a quos, animi omnis assumenda quia doloribus totam neque commodi ullam deserunt quo, accusantium mollitia dicta? Enim id mollitia at accusamus expedita atque.
                                        Dolores distinctio, rem dicta rerum mollitia impedit quo adipisci debitis asperiores? Illum soluta id aspernatur quos ipsa incidunt expedita, rem maxime inventore commodi, dolorum vitae sit labore tempore aliquid officiis!
                                        Dolorum nulla incidunt consequatur voluptate! Natus vitae quo, atque ad vero a iure voluptatum hic explicabo minus inventore dolore eaque molestiae architecto sed beatae ut consequatur quod similique. Vitae, ut!
                                        Cupiditate harum pariatur provident rerum vel quae facilis distinctio corrupti laboriosam totam voluptatem repellendus accusantium dignissimos, aperiam, dolorem deserunt earum id doloribus dolores! A sapiente asperiores corrupti quas dolores unde.
                                        Ratione expedita corrupti rem delectus magnam eaque sequi odio, cum aut, nihil inventore quibusdam veniam tenetur rerum natus, quaerat temporibus eveniet qui dicta in. Sunt doloribus magnam aliquam quod maxime.
                                        Nisi, iure velit cupiditate, nesciunt blanditiis eligendi est eius quo, mollitia reprehenderit recusandae inventore? Non earum quidem quisquam aliquid similique repudiandae, tenetur, consequatur ullam saepe ex iusto distinctio obcaecati inventore.
                                        Deleniti distinctio ratione sequi quaerat animi dicta! Earum commodi ex incidunt mollitia aliquam necessitatibus delectus, non minus provident dolorem laboriosam suscipit dicta amet impedit, facere, quis temporibus? Molestiae, omnis! Repellendus.
                                        Ducimus, consequuntur voluptatem ipsa mollitia corporis modi, dolore non, eveniet nostrum soluta eos reprehenderit fuga dolorem quisquam omnis. Deleniti dolorem tenetur aliquam molestiae voluptates dolorum numquam. Ad rem sint dolorem.
                                        Quidem ab, sit voluptatem magnam quae hic accusamus. Praesentium tempora architecto eligendi corrupti dolorum tempore! Doloribus voluptatibus laborum magnam excepturi perspiciatis aperiam commodi, eveniet, et accusamus nemo, dignissimos cumque consequatur!
                                        Amet provident ratione necessitatibus dicta corrupti fuga debitis nesciunt? Soluta quas aspernatur non. Ad possimus nulla aspernatur minima modi voluptate, magnam molestiae praesentium, vero tempore culpa exercitationem! Nesciunt, sunt esse.
                                        Obcaecati ipsa quisquam praesentium tempore voluptatum deserunt nam doloribus, veritatis modi magnam corporis facere beatae illo vero assumenda odio ipsam fugiat esse, officiis aliquam? Aliquid expedita aut soluta natus beatae!
                                        Natus nemo atque odio modi incidunt reprehenderit doloremque officia autem repellendus, eum non culpa hic provident, ut consectetur quam voluptatibus, a ipsa aperiam! Vel, maxime! Asperiores cum molestiae ipsam doloribus?
                                        Deleniti, nihil, quod enim perspiciatis obcaecati expedita minima, maxime fugit rerum ex corrupti velit. Quidem doloremque, deleniti debitis quae deserunt unde tenetur quam, velit, itaque dolorem illum ad. Aliquam, unde.
                                        Inventore enim impedit quia, perferendis porro placeat dolores explicabo debitis quae soluta optio libero veritatis, neque, atque iste ut magni praesentium beatae. Cum, reiciendis vero nesciunt alias animi esse neque?
                                        Quis, reiciendis ut error nemo consectetur aperiam temporibus inventore modi natus unde eius nostrum? Quas explicabo omnis aut hic maxime? Mollitia doloremque earum nisi vel itaque? Voluptatum molestias mollitia quibusdam.
                                        Debitis dolorum numquam perspiciatis odit eveniet omnis labore velit fuga sit sed corrupti eum, itaque ratione minima facilis, aliquam nemo tempore atque amet dignissimos! Explicabo repudiandae maiores tempore adipisci minima?
                                        Ex adipisci distinctio nam. Nesciunt, recusandae maxime. Dolore est inventore quas, ab praesentium iusto perspiciatis eos, dignissimos numquam beatae molestiae ad dolor dicta minus nemo porro repudiandae? Maxime, earum praesentium.</p>
                                    <small class="flex text-xs">
                                        <span class="msg-time">2023-01-14 03:44:46</span>
                                        <span class="msg-status hidden">
                                            <svg viewBox="0 0 16 11" height="11" width="16" preserveAspectRatio="xMidYMid meet" class="" fill="none">
                                                <path d="M11.0714 0.652832C10.991 0.585124 10.8894 0.55127 10.7667 0.55127C10.6186 0.55127 10.4916 0.610514 10.3858 0.729004L4.19688 8.36523L1.79112 6.09277C1.7488 6.04622 1.69802 6.01025 1.63877 5.98486C1.57953 5.95947 1.51817 5.94678 1.45469 5.94678C1.32351 5.94678 1.20925 5.99544 1.11192 6.09277L0.800883 6.40381C0.707784 6.49268 0.661235 6.60482 0.661235 6.74023C0.661235 6.87565 0.707784 6.98991 0.800883 7.08301L3.79698 10.0791C3.94509 10.2145 4.11224 10.2822 4.29844 10.2822C4.40424 10.2822 4.5058 10.259 4.60313 10.2124C4.70046 10.1659 4.78086 10.1003 4.84434 10.0156L11.4903 1.59863C11.5623 1.5013 11.5982 1.40186 11.5982 1.30029C11.5982 1.14372 11.5348 1.01888 11.4078 0.925781L11.0714 0.652832ZM8.6212 8.32715C8.43077 8.20866 8.2488 8.09017 8.0753 7.97168C7.99489 7.89128 7.8891 7.85107 7.75791 7.85107C7.6098 7.85107 7.4892 7.90397 7.3961 8.00977L7.10411 8.33984C7.01947 8.43717 6.97715 8.54508 6.97715 8.66357C6.97715 8.79476 7.0237 8.90902 7.1168 9.00635L8.1959 10.0791C8.33132 10.2145 8.49636 10.2822 8.69102 10.2822C8.79681 10.2822 8.89838 10.259 8.99571 10.2124C9.09304 10.1659 9.17556 10.1003 9.24327 10.0156L15.8639 1.62402C15.9358 1.53939 15.9718 1.43994 15.9718 1.32568C15.9718 1.1818 15.9125 1.05697 15.794 0.951172L15.4386 0.678223C15.3582 0.610514 15.2587 0.57666 15.1402 0.57666C14.9964 0.57666 14.8715 0.635905 14.7657 0.754395L8.6212 8.32715Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="all-media">
                        <div class="flex justify-between">
                            <p class="text-lg font-semibold">Media</p>
                            <a href="#">View All</a>
                        </div>
                        <div class="w-full h-24 flex gap-2">
                            <div class="h-full min-w-[40%] border-2">
                                <img src="#" alt="preview of image or video">
                            </div>
                            <div class="h-full min-w-[40%] border-2">
                                <img src="#" alt="preview of image or video">
                            </div>
                            <div class="h-full min-w-[40%] border-2">
                                <img src="#" alt="preview of image or video">
                            </div>
                            <div class="h-full min-w-[40%] border-2">
                                <img src="#" alt="preview of image or video">
                            </div>
                            <div class="h-full min-w-[40%] border-2">
                                <img src="#" alt="preview of image or video">
                            </div>
                        </div>
                    </div>
                    <div class="links-urls">
                        <div class="flex justify-between">
                            <p class="text-lg font-semibold">Links and URLs</p>
                            <a href="#">View All</a>
                        </div>
                        <div class="grid-item gap-20 py-1 messages-chat max-h-32 block">
                            <div class="max-w-[100%] min-w-[150px] w-fit message rounded-lg message-content bg-[#fff]">
                                <p class="msg-cont ml-1">minus nemo porro repudiandae? Maxime, earum praesentium.</p>
                                <small class="text-xs hidden">
                                    <span class="msg-time">2023-01-14 03:44:46</span>
                                    <span class="msg-status hidden">
                                        <svg viewBox="0 0 16 11" height="11" width="16" preserveAspectRatio="xMidYMid meet" class="" fill="none">
                                            <path d="M11.0714 0.652832C10.991 0.585124 10.8894 0.55127 10.7667 0.55127C10.6186 0.55127 10.4916 0.610514 10.3858 0.729004L4.19688 8.36523L1.79112 6.09277C1.7488 6.04622 1.69802 6.01025 1.63877 5.98486C1.57953 5.95947 1.51817 5.94678 1.45469 5.94678C1.32351 5.94678 1.20925 5.99544 1.11192 6.09277L0.800883 6.40381C0.707784 6.49268 0.661235 6.60482 0.661235 6.74023C0.661235 6.87565 0.707784 6.98991 0.800883 7.08301L3.79698 10.0791C3.94509 10.2145 4.11224 10.2822 4.29844 10.2822C4.40424 10.2822 4.5058 10.259 4.60313 10.2124C4.70046 10.1659 4.78086 10.1003 4.84434 10.0156L11.4903 1.59863C11.5623 1.5013 11.5982 1.40186 11.5982 1.30029C11.5982 1.14372 11.5348 1.01888 11.4078 0.925781L11.0714 0.652832ZM8.6212 8.32715C8.43077 8.20866 8.2488 8.09017 8.0753 7.97168C7.99489 7.89128 7.8891 7.85107 7.75791 7.85107C7.6098 7.85107 7.4892 7.90397 7.3961 8.00977L7.10411 8.33984C7.01947 8.43717 6.97715 8.54508 6.97715 8.66357C6.97715 8.79476 7.0237 8.90902 7.1168 9.00635L8.1959 10.0791C8.33132 10.2145 8.49636 10.2822 8.69102 10.2822C8.79681 10.2822 8.89838 10.259 8.99571 10.2124C9.09304 10.1659 9.17556 10.1003 9.24327 10.0156L15.8639 1.62402C15.9358 1.53939 15.9718 1.43994 15.9718 1.32568C15.9718 1.1818 15.9125 1.05697 15.794 0.951172L15.4386 0.678223C15.3582 0.610514 15.2587 0.57666 15.1402 0.57666C14.9964 0.57666 14.8715 0.635905 14.7657 0.754395L8.6212 8.32715Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function _contact_user_info(param) {
        var contact_user_info = document.getElementsByClassName('contact-user-info')
        if (param == 1) {
            contact_user_info[0].style.display = "block";
        } else if (param == 2) {
            contact_user_info[0].style.display = "none";
        }
    }

    function _messages_box(param) {
        var messages_box = document.getElementsByClassName('messages-box')
        if (param == 1) {
            messages_box[0].style.display = "block";
        } else if (param == 2) {
            messages_box[0].style.display = "none";
        }
    }
</script>