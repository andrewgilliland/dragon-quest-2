import { type SharedData } from '@/types';
import { Head, Link, usePage } from '@inertiajs/react';

export default function Monsters() {
    const { monsters } = usePage<SharedData>().props;

    console.log(monsters);

    return (
        <>
            <Head title="Home">
                <link rel="preconnect" href="https://fonts.bunny.net" />
                <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
            </Head>
            <div className="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:justify-center lg:p-8 dark:bg-[#0a0a0a]">
                <header className="mb-6 w-full max-w-[335px] text-sm not-has-[nav]:hidden lg:max-w-4xl">
                    <nav className="flex items-center justify-end gap-4">
                        <Link
                            href={route('home')}
                            className="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                        >
                            Home
                        </Link>
                    </nav>
                </header>
                <div className="flex w-full flex-col items-center justify-center opacity-100 transition-opacity duration-750 lg:grow starting:opacity-0">
                    <main className="flex w-full max-w-[335px] flex-col-reverse lg:max-w-4xl lg:flex-row">
                        <div className="flex-1 rounded-br-lg rounded-bl-lg bg-white p-6 pb-12 text-[13px] leading-[20px] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] lg:rounded-tl-lg lg:rounded-br-none lg:p-20 dark:bg-[#161615] dark:text-[#EDEDEC] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <h1 className="mb-1 font-medium">Monsters</h1>
                            <p className="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                                Explore the world of Dragon Quest Monsters, where you can find and capture a variety of creatures to train and battle
                                with. Each monster has its own unique abilities and characteristics, making them valuable allies in your quest.
                            </p>
                        </div>
                        <div className="flex-1 rounded-tl-lg rounded-tr-lg bg-white p-6 pb-12 shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] lg:rounded-tl-none lg:rounded-br-lg lg:rounded-bl-none lg:p-20 dark:bg-[#161615] dark:text-[#EDEDEC] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <img
                                src="../../../../public/black-dragon-1.png"
                                alt="Black Dragon"
                                className="absolute -top-8 -right-8 h-[400px] max-w-[400px] lg:block"
                            />
                        </div>
                    </main>
                    <section className="mt-12">
                        <h2></h2>

                        <div className="flex flex-col gap-4">
                            {monsters.map((monster) => (
                                <div
                                    key={monster.id}
                                    className="flex items-center justify-between rounded-lg bg-white p-4 dark:bg-[#161615] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"
                                >
                                    <div className="dark:text-[#A1A09A]">
                                        <h3 className="text-lg font-semibold">{monster.name}</h3>
                                        <p className="text-sm">{monster.description}</p>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </section>
                </div>
                <div className="hidden h-14.5 lg:block"></div>
            </div>
        </>
    );
}
