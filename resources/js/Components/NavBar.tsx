import { Flex, TabNav } from "@radix-ui/themes"

export default function NavBar() {
    return (
        <Flex direction="column" gap="4" pb="2">
            <TabNav.Root color="indigo">
                <TabNav.Link href="#">Account</TabNav.Link>
                <TabNav.Link href="/login">Login</TabNav.Link>
                <TabNav.Link href="/register">Register</TabNav.Link>
                <TabNav.Link href="/dashboard">Dashboard</TabNav.Link>
            </TabNav.Root>
        </Flex>
    )
}