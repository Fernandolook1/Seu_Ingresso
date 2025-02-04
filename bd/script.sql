USE [master];
/****** Object:  Database [mrcake]    Script Date: 20/11/2018 22:52:51 ******/
CREATE DATABASE [mrcake]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'mrcake', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.SQLEXPRESS\MSSQL\DATA\mrcakeREAL.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'mrcake_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.SQLEXPRESS\MSSQL\DATA\mrcakeREAL_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB );
ALTER DATABASE [mrcake] SET COMPATIBILITY_LEVEL = 140;
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [mrcake].[dbo].[sp_fulltext_database] @action = 'enable'
end;
ALTER DATABASE [mrcake] SET ANSI_NULL_DEFAULT OFF ;
ALTER DATABASE [mrcake] SET ANSI_NULLS OFF ;
ALTER DATABASE [mrcake] SET ANSI_PADDING OFF ;
ALTER DATABASE [mrcake] SET ANSI_WARNINGS OFF ;
ALTER DATABASE [mrcake] SET ARITHABORT OFF ;
ALTER DATABASE [mrcake] SET AUTO_CLOSE ON ;
ALTER DATABASE [mrcake] SET AUTO_SHRINK OFF ;
ALTER DATABASE [mrcake] SET AUTO_UPDATE_STATISTICS ON ;
ALTER DATABASE [mrcake] SET CURSOR_CLOSE_ON_COMMIT OFF ;
ALTER DATABASE [mrcake] SET CURSOR_DEFAULT  GLOBAL ;
ALTER DATABASE [mrcake] SET CONCAT_NULL_YIELDS_NULL OFF ;
ALTER DATABASE [mrcake] SET NUMERIC_ROUNDABORT OFF ;
ALTER DATABASE [mrcake] SET QUOTED_IDENTIFIER OFF ;
ALTER DATABASE [mrcake] SET RECURSIVE_TRIGGERS OFF ;
ALTER DATABASE [mrcake] SET  ENABLE_BROKER ;
ALTER DATABASE [mrcake] SET AUTO_UPDATE_STATISTICS_ASYNC OFF ;
ALTER DATABASE [mrcake] SET DATE_CORRELATION_OPTIMIZATION OFF ;
ALTER DATABASE [mrcake] SET TRUSTWORTHY OFF ;
ALTER DATABASE [mrcake] SET ALLOW_SNAPSHOT_ISOLATION OFF ;
ALTER DATABASE [mrcake] SET PARAMETERIZATION SIMPLE ;
ALTER DATABASE [mrcake] SET READ_COMMITTED_SNAPSHOT OFF ;
ALTER DATABASE [mrcake] SET HONOR_BROKER_PRIORITY OFF ;
ALTER DATABASE [mrcake] SET RECOVERY SIMPLE ;
ALTER DATABASE [mrcake] SET  MULTI_USER ;
ALTER DATABASE [mrcake] SET PAGE_VERIFY CHECKSUM  ;
ALTER DATABASE [mrcake] SET DB_CHAINING OFF ;
ALTER DATABASE [mrcake] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) ;
ALTER DATABASE [mrcake] SET TARGET_RECOVERY_TIME = 60 SECONDS ;
ALTER DATABASE [mrcake] SET DELAYED_DURABILITY = DISABLED ;
ALTER DATABASE [mrcake] SET QUERY_STORE = OFF;
USE [mrcake];
ALTER DATABASE SCOPED CONFIGURATION SET IDENTITY_CACHE = ON;;
ALTER DATABASE SCOPED CONFIGURATION SET LEGACY_CARDINALITY_ESTIMATION = OFF;;
ALTER DATABASE SCOPED CONFIGURATION FOR SECONDARY SET LEGACY_CARDINALITY_ESTIMATION = PRIMARY;;
ALTER DATABASE SCOPED CONFIGURATION SET MAXDOP = 0;;
ALTER DATABASE SCOPED CONFIGURATION FOR SECONDARY SET MAXDOP = PRIMARY;;
ALTER DATABASE SCOPED CONFIGURATION SET PARAMETER_SNIFFING = ON;;
ALTER DATABASE SCOPED CONFIGURATION FOR SECONDARY SET PARAMETER_SNIFFING = PRIMARY;;
ALTER DATABASE SCOPED CONFIGURATION SET QUERY_OPTIMIZER_HOTFIXES = OFF;;
ALTER DATABASE SCOPED CONFIGURATION FOR SECONDARY SET QUERY_OPTIMIZER_HOTFIXES = PRIMARY;;
USE [mrcake];
/****** Object:  User [teste_rafael]    Script Date: 20/11/2018 22:52:52 ******/
CREATE LOGIN teste_rafael WITH PASSWORD = '123';
CREATE USER [teste_rafael] FOR LOGIN [teste_rafael] WITH DEFAULT_SCHEMA=[dbo];
/****** Object:  User [teste]    Script Date: 20/11/2018 22:52:52 ******/
CREATE LOGIN syst WITH PASSWORD = 'Rodrigo321';
CREATE USER [syst] FOR LOGIN [syst] WITH DEFAULT_SCHEMA=[dbo];
/****** Object:  User [rafael]    Script Date: 20/11/2018 22:52:52 ******/
CREATE LOGIN rafael WITH PASSWORD = '123';
CREATE USER [rafael] FOR LOGIN [rafael] WITH DEFAULT_SCHEMA=[dbo];
/****** Object:  User [jefferson]    Script Date: 20/11/2018 22:52:52 ******/
CREATE LOGIN jefferson WITH PASSWORD = '123';
CREATE USER [jefferson] FOR LOGIN [jefferson] WITH DEFAULT_SCHEMA=[dbo];

CREATE LOGIN rodrigo WITH PASSWORD = '123';
CREATE USER [rodrigo] FOR LOGIN [rodrigo] WITH DEFAULT_SCHEMA=[dbo];
/****** Object:  User [fernando]    Script Date: 20/11/2018 22:52:52 ******/
CREATE LOGIN fernando WITH PASSWORD = '123';
CREATE USER [fernando] FOR LOGIN [fernando] WITH DEFAULT_SCHEMA=[dbo];

ALTER ROLE [db_datareader] ADD MEMBER [syst];
ALTER ROLE [db_datawriter] ADD MEMBER [syst];
alter role [db_owner] add member [teste_rafael];
ALTER ROLE [db_owner] ADD MEMBER [rafael];
ALTER ROLE [db_owner] ADD MEMBER [jefferson];
ALTER ROLE [db_owner] ADD MEMBER [rodrigo];
alter role [db_owner] add member [fernando];
/****** Object:  Table [dbo].[Administradores]    Script Date: 20/11/2018 22:52:52 ******/
SET ANSI_NULLS ON;
SET QUOTED_IDENTIFIER ON;

CREATE TABLE [dbo].[Administradores](
	[codigo] [int] IDENTITY(1,1) NOT NULL,
	[nome] [varchar](50) NULL,
 CONSTRAINT [PK_Administradores] PRIMARY KEY CLUSTERED
(
	[codigo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY];
/****** Object:  Table [dbo].[Clientes]    Script Date: 20/11/2018 22:52:53 ******/
SET ANSI_NULLS ON;
SET QUOTED_IDENTIFIER ON;
CREATE TABLE [dbo].[Clientes](
	[id_cliente] [int] IDENTITY(1,1) NOT NULL,
	[cpf] [int] NULL,
	[nome] [varchar](50) NULL,
	[nascimento] [date] NULL,
	[telefone] [int] NULL,
	[celular] [int] NULL,
 CONSTRAINT [PK_Clientes] PRIMARY KEY CLUSTERED
(
	[id_cliente] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY];
/****** Object:  Table [dbo].[Enderecos]    Script Date: 20/11/2018 22:52:53 ******/
SET ANSI_NULLS ON;
SET QUOTED_IDENTIFIER ON;
CREATE TABLE [dbo].[Enderecos](
	[codigo] [int] IDENTITY(1,1) NOT NULL,
	[id_origem] [int] NULL,
	[tipo_user] [int] NULL,
	[cep] [int] NULL,
	[rua] [varchar](50) NULL,
	[bairro] [varchar](50) NULL,
	[cidade] [varchar](50) NULL,
	[uf] [varchar](2) NULL,
	[numero] [int] NULL,
	[complemento] [varchar](35) NULL,
	[tipo_endereco] [int] NULL,
 CONSTRAINT [PK_Enderecos] PRIMARY KEY CLUSTERED
(
	[codigo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY];
/****** Object:  Table [dbo].[Fornecedores]    Script Date: 20/11/2018 22:52:53 ******/
SET ANSI_NULLS ON;
SET QUOTED_IDENTIFIER ON;
CREATE TABLE [dbo].[Fornecedores](
	[id_fornecedor] [int] IDENTITY(1,1) NOT NULL,
	[cnpj] [int] NULL,
	[razao_social] [varchar](100) NULL,
	[nome_fantasia] [varchar](70) NULL,
	[telefone] [int] NULL,
 CONSTRAINT [PK_Fornecedores] PRIMARY KEY CLUSTERED
(
	[id_fornecedor] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY];
/****** Object:  Table [dbo].[Ingredientes]    Script Date: 20/11/2018 22:52:53 ******/
SET ANSI_NULLS ON;
SET QUOTED_IDENTIFIER ON;
CREATE TABLE [dbo].[Ingredientes](
	[codigo] [int] IDENTITY(1,1) NOT NULL,
	[id_produto] [int] NULL,
	[descricao] [varchar](200) NULL,
 CONSTRAINT [PK_Ingredientes] PRIMARY KEY CLUSTERED
(
	[codigo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY];
/****** Object:  Table [dbo].[NOMES]    Script Date: 20/11/2018 22:52:53 ******/
SET ANSI_NULLS ON;
SET QUOTED_IDENTIFIER ON;
CREATE TABLE [dbo].[NOMES](
	[NOME] [varchar](20) NULL
) ON [PRIMARY];
/****** Object:  Table [dbo].[Pedidos]    Script Date: 20/11/2018 22:52:53 ******/
SET ANSI_NULLS ON;
SET QUOTED_IDENTIFIER ON;
CREATE TABLE [dbo].[Pedidos](
	[codigo] [int] IDENTITY(1,1) NOT NULL,
	[num_pedido] [int] NULL,
	[id_cliente] [int] NULL,
	[id_produto] [int] NULL,
	[status] [varchar](15) NULL,
	[cod_endereco_entrega] [int] NULL,
	[data_entrega] [date] NULL,
 CONSTRAINT [PK_Pedidos] PRIMARY KEY CLUSTERED
(
	[codigo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY];
/****** Object:  Table [dbo].[Produtos]    Script Date: 20/11/2018 22:52:53 ******/
SET ANSI_NULLS ON;
SET QUOTED_IDENTIFIER ON;
CREATE TABLE [dbo].[Produtos](
	[id_produto] [int] IDENTITY(1,1) NOT NULL,
	[id_fornecedor] [int] NULL,
	[nome] [varchar](50) NULL,
	[descricao] [varchar](200) NULL,
	[preco] [real] NULL,
 CONSTRAINT [PK_Produtos] PRIMARY KEY CLUSTERED
(
	[id_produto] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY];
/****** Object:  Table [dbo].[Tipo_Residencia]    Script Date: 20/11/2018 22:52:53 ******/
SET ANSI_NULLS ON;
SET QUOTED_IDENTIFIER ON;
CREATE TABLE [dbo].[Tipo_Residencia](
	[codigo] [int] IDENTITY(1,1) NOT NULL,
	[tipo] [varchar](15) NULL,
 CONSTRAINT [PK_Tipo_Residencia] PRIMARY KEY CLUSTERED
(
	[codigo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY];
/****** Object:  Table [dbo].[Tipo_User]    Script Date: 20/11/2018 22:52:53 ******/
SET ANSI_NULLS ON;
SET QUOTED_IDENTIFIER ON;
CREATE TABLE [dbo].[Tipo_User](
	[codigo] [int] IDENTITY(1,1) NOT NULL,
	[descricao] [varchar](200) NULL,
 CONSTRAINT [PK_Tipo_User] PRIMARY KEY CLUSTERED
(
	[codigo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY];
/****** Object:  Table [dbo].[Usuarios]    Script Date: 20/11/2018 22:52:53 ******/
SET ANSI_NULLS ON;
SET QUOTED_IDENTIFIER ON;
CREATE TABLE [dbo].[Usuarios](
	[codigo] [int] IDENTITY(1,1) NOT NULL,
	[id_origem] [int] NULL,
	[tipo_origem] [int] NULL,
	[email] [varchar](50) NOT NULL,
	[senha] [varchar](20) NOT NULL,
	[status] [bit] NULL,
 CONSTRAINT [PK_Usuarios] PRIMARY KEY CLUSTERED
(
	[codigo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY];
ALTER TABLE [dbo].[Enderecos]  WITH CHECK ADD  CONSTRAINT [FK_Enderecos_Tipo_Residencia] FOREIGN KEY([tipo_endereco])
REFERENCES [dbo].[Tipo_Residencia] ([codigo]);
ALTER TABLE [dbo].[Enderecos] CHECK CONSTRAINT [FK_Enderecos_Tipo_Residencia];
ALTER TABLE [dbo].[Ingredientes]  WITH CHECK ADD  CONSTRAINT [FK_Ingredientes_Produtos] FOREIGN KEY([id_produto])
REFERENCES [dbo].[Produtos] ([id_produto]);
ALTER TABLE [dbo].[Ingredientes] CHECK CONSTRAINT [FK_Ingredientes_Produtos];
ALTER TABLE [dbo].[Pedidos]  WITH CHECK ADD  CONSTRAINT [FK_Pedidos_Produtos] FOREIGN KEY([id_produto])
REFERENCES [dbo].[Produtos] ([id_produto]);
ALTER TABLE [dbo].[Pedidos] CHECK CONSTRAINT [FK_Pedidos_Produtos];
ALTER TABLE [dbo].[Produtos]  WITH CHECK ADD  CONSTRAINT [FK_Produtos_Fornecedores] FOREIGN KEY([id_fornecedor])
REFERENCES [dbo].[Fornecedores] ([id_fornecedor]);
ALTER TABLE [dbo].[Produtos] CHECK CONSTRAINT [FK_Produtos_Fornecedores];
ALTER TABLE [dbo].[Usuarios]  WITH CHECK ADD  CONSTRAINT [FK_Usuarios_Administradores1] FOREIGN KEY([tipo_origem])
REFERENCES [dbo].[Administradores] ([codigo]);
ALTER TABLE [dbo].[Usuarios] CHECK CONSTRAINT [FK_Usuarios_Administradores1];
USE [master];
ALTER DATABASE [mrcake] SET  READ_WRITE ;


exec sp_columns pedidos;

-- interactive
select * from clientes;